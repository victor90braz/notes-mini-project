<?php

$url = parse_url($_SERVER['REQUEST_URI'])["path"];

$routes = [
    "/" => "./controllers/HomeController.php",
    "/about" => "./controllers/AboutController.php",
];

routeToController($url, $routes);

function abort() {
    http_response_code(404);

    require 'views/404.php';
    die();
}

function routeToController($url, $routes) {

    if (!array_key_exists($url, $routes)) {
        abort();
    }

    require $routes[$url];

};