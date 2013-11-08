<?php

namespace Rosewood;

class Application
{
  public function __construct()
  {
    $this->config = [];
  }

  public function run()
  {
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";
  }
}
