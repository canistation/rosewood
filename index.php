<?php
require 'lib/rosewood.php';

$app = new \Rosewood\Application();

$app->get('/', function() {
});

$app->get('/:action/:name/', function($action, $name) {
  echo "$action, $name";
});

$app->run();
