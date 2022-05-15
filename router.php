<?php

$routes = [];

function route($action, Closure $callback)
{
    global $routes;
    $action = trim($action, '/');
    $action = preg_replace('/{[^}]+}/', '(.+)',$action);

    $routes[$action] = $callback;
}

function dispatch($action)
{
  global $routes;
  $action = trim($action, '/');
  $callback = null;
  $pararms = [];

  foreach($routes as $route => $handler) 
  {
    if(preg_match("%^{$route}$%", $action, $matches) === 1) 
    { 
      $callback = $handler; 
      unset($matches[0]);
      $pararms = $matches; 
      break;

    }
  }

  if(!$callback || !is_callable($callback))
  {
    http_response_code(404); 
    echo "404 - Not found"; 
    exit;
  }

  echo call_user_func($callback, ...$pararms);
}


function error_page()
{
  http_response_code(404); 
  echo "404 - Not found"; 
  exit;
}