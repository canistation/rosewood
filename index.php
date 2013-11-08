<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function() {
});

$app->get('/:action/:name/', function($action, $name) {
  echo "$action, $name";
});

$app->run();

//require 'lib/rosewood.php';
//use Rosewood as R;
//$app = new R\Application();
//$app->run();
