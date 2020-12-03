<?php
const ROOT = __DIR__ . "/../";
const VIEWS = ROOT . "/app/Views";
const CONTROLLERS = ROOT . "/app/Controllers";
const LOGS = ROOT . "/logs";
const EXT = '.php';
const APP_ENV = 'dev';
const CONFIG = ROOT . '/config';
const COMMON = ROOT . '/common';
const DB_CONFIG_FILE = CONFIG . '/db.php';
const MODELS = ROOT . '/app/Models';
define("ROUTES", require_once CONFIG . '/routes.php');
