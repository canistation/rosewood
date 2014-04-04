<?php
namespace Rosewood;

use RedBean_Facade as R;

class Database
{
  function __construct()
  {
    $this->config = [];
    R::setup('mysql:host=localhost;dbname=rosewood-test',
      'root','123456'); //mysql
  }

  public function __call($function_name, $arguments)
  {
    call_user_func_array(__NAMESPACE__."R::$function_name", $arguments);
  }

  function __destruct()
  {
    R::close();
  }
}

