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
    print "Hello, world!";
    var_dump($_SERVER);
  }
}
