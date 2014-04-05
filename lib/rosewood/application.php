<?php
namespace Rosewood;

class Application
{
  function __construct($config = [])
  {
    $this->router = new \Slim\Slim();
    $this->config = $config;
  }

  public function run()
  {
    $this->router->run();
  }

  public static function config($key = null)
  {
    return $key === null ? $this->config[$key] : $this->config;
  }

  public function configure($config)
  {
    $this->config = $config;
  }

  public function __call($function_name, $arguments)
  {
    call_user_func_array([$this->router, $function_name], $arguments);
  }

}

