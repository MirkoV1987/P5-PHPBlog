<?php

include 'vendor/autoload.php';

\Framework\Session::getSession();

$router = new \Framework\Router();
$router->routingRequest();