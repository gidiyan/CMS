<?php
require_once realpath(__DIR__ . '/../config') . '/app.php';


function config($mix)
{
    $url = CONFIG . "/" . $mix . ".json";
    $jsonFile = file_get_contents($url);
    return json_decode($jsonFile, true);
}

spl_autoload_register(function ($class) {
    $file = COMMON . '/' . $class . EXT;
    if (is_file($file)) {
        require_once $file;
    }

    $filename = MODELS . '/' . $class . EXT;
    if (file_exists($filename)) {
        include_once $filename;
    }
});

$app = new App();
define('PUBLIC_ROOT', $app->request->root());
$app->run();

