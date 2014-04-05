<?php
require 'lib/rosewood.php';

$config = ['root_directory' => __DIR__];
$app = new \Rosewood\Application($config);
$db = new \Rosewood\Database();
$renderer = new \Rosewood\Renderer();

//$app->configure();
$app->get('/', function() {
});

//$app->resource( //  resource :posts
//$app->get('/:controller/:id', Controller);   //   /posts/:id   /users/:id

$app->get('/:action/:name/', function($action, $name) {
  $user = $db->dispense('user');
  //$user->name = $name;
  //$user->action = $action;
  //$id = $db->store($user);
  $data = [];
  $renderer->render($action . '/' . $name . '.twig' , $data);
  //echo "$action, $name";
  //echo "$id: $action, $name";
});


$app->run();
