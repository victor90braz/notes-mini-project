<?php
require_once 'Response.php';

$url = parse_url($_SERVER['REQUEST_URI'])["path"];

$routes = [
    "/" => "./controllers/HomeController.php",
    "/about" => "./controllers/AboutController.php",
    "/notes" => "./controllers/NotesController.php",
    "/note" => "./controllers/NoteController.php",
];

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
