<?php
namespace Rosewood;

require __DIR__.'/../vendor/autoload.php';

class Application
{
  public function __construct()
  {
    $this->router = new \Slim\Slim();
    $this->config = [];
  }

  public function run()
  {
    $this->router->run();
  }

  public function __call($function_name, $arguments)
  {
    call_user_func_array([$this->router, $function_name], $arguments);
  }
}
