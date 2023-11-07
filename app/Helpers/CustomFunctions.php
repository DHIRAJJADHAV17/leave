<?php
// app/Helpers/CustomFunctions.php

function set404Override(\CodeIgniter\Router\RouteCollectionInterface &$routes, string $controllerName, string $methodName)
{
    $routes->set404Override('PageNotFoundController::index'); // Using the custom function

}