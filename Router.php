<?php

class Router {

  public $path;
  public $method;
  public $data;
  public $sent;
  public $found;
  public $called;

  public function __construct() {

    $this->path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
    $this->method = $_SERVER['REQUEST_METHOD'];
  
    $this->data = $this->method === 'GET' ? $_GET : $_POST;
  
  }

  public function __call($name, $args) {

    if ($name == strtolower($this->method) && (strtolower($args[0]) == strtolower($this->path))) {
      $this->$name($args[1]);
      $this->called = true;
    } 
  }

  public function send($value) {
    $this->sent = true;
    print_r(json_decode($value));
  }

  
  private function get($callback) {
    $callback((Object) $this->data, $this);
  }

  private function post($callback) {
    $callback((Object) $this->data, $this);
  }

}