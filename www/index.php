<?php

include_once '../config/config.php';
include_once '../libary/mainFunctions.php';

$controllerName = ucfirst($_GET['controller'] ?? 'index');
$actionName = $_GET['action'] ?? 'index';

loadPage($controllerName, $actionName);
