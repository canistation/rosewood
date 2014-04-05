<?php
namespace Rosewood;

class Renderer
{
  function __construct()
  {
    $root_path = Application::config('root_directory');
    $loader = new Twig_Loader_Filesystem($root_path . '/views');
    $this->renderer = new Twig_Environment($loader, ['cache' => $root_path . '/cache']);
  }

  public function render($template, $data)
  {
    echo $this->renderer->render($template, $data);
  }
}
