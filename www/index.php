<?php

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
echo 'Подключаемый php-файл (Контроллер) = ' . $controllerName . '<br>';

$actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'index';
echo 'Функция формирующая страницу (Экшн) = ' . $actionName . '<br>';

include_once '../controllers/' . $controllerName . 'Controller.php';
