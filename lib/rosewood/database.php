<?php
namespace Rosewood;

use RedBean_Facade as R;

class Database
{
  function __construct($config = [])
  {
    $this->config = $config;
    if (!empty($this->config)) {
      R::setup($this->connectionString($this->config['host'], $this->config['db']), $this->config['user'], $this->config['pass']);
    }
  }

  public function __call($function_name, $arguments)
  {
    call_user_func_array(__NAMESPACE__."R::$function_name", $arguments);
  }

  function __destruct()
  {
    R::close();
  }

  protected function connectionString($host, $database)
  {
    return "mysql:host=$host;dbname=$database";
  }
}

