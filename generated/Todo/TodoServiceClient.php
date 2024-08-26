<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Todo;

/**
 */
class TodoServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a new Todo
     * @param \Todo\CreateTodoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateTodo(\Todo\CreateTodoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/todo.TodoService/CreateTodo',
        $argument,
        ['\Todo\TodoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a Todo by ID
     * @param \Todo\TodoIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTodo(\Todo\TodoIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/todo.TodoService/GetTodo',
        $argument,
        ['\Todo\TodoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a list of all Todos
     * @param \Todo\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListTodos(\Todo\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/todo.TodoService/ListTodos',
        $argument,
        ['\Todo\TodoListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an existing Todo
     * @param \Todo\UpdateTodoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateTodo(\Todo\UpdateTodoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/todo.TodoService/UpdateTodo',
        $argument,
        ['\Todo\TodoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a Todo by ID
     * @param \Todo\TodoIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteTodo(\Todo\TodoIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/todo.TodoService/DeleteTodo',
        $argument,
        ['\Todo\PBEmpty', 'decode'],
        $metadata, $options);
    }

}
