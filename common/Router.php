<?php

$result = null;
try {
    $routes = require_once CONFIG . '/routes.php';
} catch (Exception $e) {
    error_log($e->getMessage());
}
function getController($path)
{
    $segments = explode('\\', $path);
    list($controller, $action) = explode('@', array_pop($segments));
    $controllerPath = '/';
    foreach ($segments as $segment) {
        $controllerPath .= $segment . '/';
    }
    return [$controllerPath, $controller, $action];
}

function initController($controllerPath, $controller, $action, $result = null)
{
    $controllerPath = CONTROLLERS . $controllerPath . $controller . '.php';
    if (file_exists($controllerPath)) {
        include_once $controllerPath;
        $controller = new $controller();
        $controller->$action();
        $result = true;

    }
    return $result;
}

foreach ($routes as $key => $value) {
    if ($key == $this->request->uri()) {
        $result = initController(...getController($value));
        break;
    }
}
if ($result == null) {
    $controller = 'ErrorController';
    include_once CONTROLLERS . '/ErrorController.php';
    $controller = new $controller();
    $controller->index();
}