<?php

$url = parse_url($_SERVER['REQUEST_URI'])["path"];
$routes = require('./routes.php');

routeToController($url, $routes);

function abort($error) {
    http_response_code($error);

    require "views/{$error}.php";
    die();
}

function routeToController($url, $routes) {

    if (!array_key_exists($url, $routes)) {
        abort(Response::NOT_FOUND);
    }

    require $routes[$url];

};
