<?php
require_once __DIR__.'/../config/app.php';

function render($template,$data=[]){
    if($data){
        extract($data);
    }
    $template .='.php';
    include_once VIEWS."/layouts/site.php";
}

function init(){
    date_default_timezone_set('Europe/Kiev');
    setlocale(LC_ALL,'uk_UA');
}

function setErrorLogging(){
    if(APP_ENV == 'dev'){
        ini_set('display_startup_errors',1);
        error_reporting(E_ALL|E_WARNING|E_PARSE|E_NOTICE|E_DEPRECATED);
        ini_set('display_errors',1);
    } else {
        error_reporting(E_ALL);
        ini_set('display_errors',0);
    }
    ini_set('log_errors',1);
    ini_set('error_log', LOGS.'/error.log');
}

function getURI(){
if(isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])){
    return trim($_SERVER['REQUEST_URI'],'/');
}
}

init();
setErrorLogging();
//error_log("hello error");

switch (getURI()) {
    case '':
        include_once CONTROLLERS."/HomeController.php";
        break;
    case 'contact':
        include_once CONTROLLERS."/AboutController.php";
        break;
    case 'blog':
        include_once CONTROLLERS."/BlogController.php";
        break;
    case 'shop':
        include_once CONTROLLERS."/ShopController.php";
        break;
    default:
        require_once  VIEWS."/errors/index.php";
        break;
}
