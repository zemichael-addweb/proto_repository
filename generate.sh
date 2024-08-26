#!/bin/bash

# Directory for generated files
GENERATED_DIR="./generated"

# Create the generated directory if it doesn't exist
mkdir -p $GENERATED_DIR

# Check if grpc_php_plugin and protoc are installed
if ! [ -x "$(command -v grpc_php_plugin)" ]; then
  echo 'Error: grpc_php_plugin is not installed.' >&2
  echo 'Please install grpc_php_plugin using the following command:'
  echo 'sudo pecl install grpc'
  exit 1
fi

if ! [ -x "$(command -v protoc)" ]; then
  echo 'Error: protoc is not installed.' >&2
  echo 'Please install protoc using the following command:'
  echo 'sudo apt-get install protobuf-compiler'
  exit 1
fi

# Check if the service name is provided as an argument
if [ -z "$1" ]; then
  echo 'Error: Service name is required.' >&2
  exit 1
fi

# Check service type. Must be either "server" or "client"
if [ -z "$2" ]; then
  echo 'Error: Service type is required.' >&2
  exit 1
fi

if [ "$2" != "server" ] && [ "$2" != "client" ]; then
  echo 'Error: Service type must be either "server" or "client".' >&2
  exit 1
fi

SERVICE_NAME=$(echo "$1" | tr '[:upper:]' '[:lower:]')
SERVICE_TYPE=$2
SERVICE_FOUND=false

# Generate gRPC code
for proto_file in ./protos/**/*.proto; do
  # Extract the service name from the proto file and convert it to lowercase
  file_service_name=$(basename "$proto_file" .proto | tr '[:upper:]' '[:lower:]')

  if [ "$file_service_name" = "$SERVICE_NAME" ] && [ "$SERVICE_TYPE" = "server" ]; then
    echo "Generating server stubs for $file_service_name"
    protoc --proto_path=./protos --php_out=$GENERATED_DIR --grpc_out=generate_$SERVICE_TYPE:$GENERATED_DIR --plugin=protoc-gen-grpc=/usr/bin/grpc_php_plugin "$proto_file"
    SERVICE_FOUND=true
  elif [ "$file_service_name" = "$SERVICE_NAME" ] && [ "$SERVICE_TYPE" = "client" ]; then
    echo "Generating client stubs for $file_service_name"
    protoc --proto_path=./protos --php_out=$GENERATED_DIR --grpc_out=$GENERATED_DIR --plugin=protoc-gen-grpc=/usr/bin/grpc_php_plugin "$proto_file"
    SERVICE_FOUND=true
  fi
done

# Check if the service was found
if [ "$SERVICE_FOUND" = false ]; then
  echo "Error: No service found with the name '$SERVICE_NAME'."
  exit 1
fi

# Add generated files to .gitignore
echo "$GENERATED_DIR" >> .gitignore

# Add protos to .gitignore
echo "protos" >> .gitignore

echo "Done generating $SERVICE_TYPE stubs for $SERVICE_NAME"
