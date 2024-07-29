<?php

// ошибки которые отправляются в вывод
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

spl_autoload_register(function (string $className){
    require_once('../'.str_replace('\\', '/',$className).'.php');
});

$pageFound = false;
$route_URL = $_GET['route'] ?? '';
$routes = require('../src/routes.php');

foreach($routes as $pattern=>$controllerAndAction){
    preg_match($pattern, $route_URL, $matches);
    if (!empty($matches)){
            unset($matches[0]);
            $pageFound = true;
            $actionName = $controllerAndAction[1];
            $controller = new $controllerAndAction[0];
            $controller->$actionName(...$matches);
    }
}
if (!$pageFound) echo 'Страница не найдена';

?>