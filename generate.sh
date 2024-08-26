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

SERVICE_NAME=$1

# Generate gRPC code
for proto_file in ./protos/**/*.proto; do
  # Extract the service name from the proto file
  file_service_name=$(basename "$proto_file" .proto)

  if [ "$file_service_name" = "$SERVICE_NAME" ]; then
    echo "Generating server stubs for $file_service_name"
    protoc --proto_path=./protos --php_out=$GENERATED_DIR --grpc_out=generate_server:$GENERATED_DIR --plugin=protoc-gen-grpc=/usr/bin/grpc_php_plugin "$proto_file"
  else
    echo "Generating client stubs for $file_service_name"
    protoc --proto_path=./protos --php_out=$GENERATED_DIR --grpc_out=$GENERATED_DIR --plugin=protoc-gen-grpc=/usr/bin/grpc_php_plugin "$proto_file"
  fi
done
