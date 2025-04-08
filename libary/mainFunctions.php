<?php

function loadPage(string $controllerName, string $actionName = 'action'): void
{
    include_once PATH_PREFIX . $controllerName . PATH_POSTFIX;

    $function = $actionName . 'Action';

    if (function_exists($function)) {
        call_user_func($function);
    }
}
