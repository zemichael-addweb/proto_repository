<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Todo;

/**
 */
class TodoServiceStub {

    /**
     * Create a new Todo
     * @param \Todo\CreateTodoRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Todo\TodoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateTodo(
        \Todo\CreateTodoRequest $request,
        \Grpc\ServerContext $context
    ): ?\Todo\TodoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get a Todo by ID
     * @param \Todo\TodoIdRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Todo\TodoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetTodo(
        \Todo\TodoIdRequest $request,
        \Grpc\ServerContext $context
    ): ?\Todo\TodoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get a list of all Todos
     * @param \Todo\PBEmpty $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Todo\TodoListResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function ListTodos(
        \Todo\PBEmpty $request,
        \Grpc\ServerContext $context
    ): ?\Todo\TodoListResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Update an existing Todo
     * @param \Todo\UpdateTodoRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Todo\TodoResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateTodo(
        \Todo\UpdateTodoRequest $request,
        \Grpc\ServerContext $context
    ): ?\Todo\TodoResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Delete a Todo by ID
     * @param \Todo\TodoIdRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Todo\PBEmpty for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteTodo(
        \Todo\TodoIdRequest $request,
        \Grpc\ServerContext $context
    ): ?\Todo\PBEmpty {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/todo.TodoService/CreateTodo' => new \Grpc\MethodDescriptor(
                $this,
                'CreateTodo',
                '\Todo\CreateTodoRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/todo.TodoService/GetTodo' => new \Grpc\MethodDescriptor(
                $this,
                'GetTodo',
                '\Todo\TodoIdRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/todo.TodoService/ListTodos' => new \Grpc\MethodDescriptor(
                $this,
                'ListTodos',
                '\Todo\PBEmpty',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/todo.TodoService/UpdateTodo' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateTodo',
                '\Todo\UpdateTodoRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/todo.TodoService/DeleteTodo' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteTodo',
                '\Todo\TodoIdRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
