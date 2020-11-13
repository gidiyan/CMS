<?php
require_once realpath(__DIR__ . '/../config') . '/app.php';


function config($mix)
{
    $url = CONFIG . "/" . $mix . ".json";
    $jsonFile = file_get_contents($url);
    return json_decode($jsonFile, true);
}

require_once COMMON . '/App.php';
$app = new App();
$app->run();

