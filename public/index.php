<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../core/Router.php';
require_once '../config/config.php';

session_start();

try {
    $router = new Router();
    $router->dispatch();
} catch (Exception $e) {
    error_log($e->getMessage());
    require_once '../app/views/error.php';
}
?>