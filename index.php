<?php
session_start();
define('BASE_PATH', __DIR__ . DIRECTORY_SEPARATOR);
define('BASE_URL', 'http://localhost:3000/');
require_once(BASE_PATH . 'data/connection.php');
require_once(BASE_PATH . 'core/sessions.php');
require_once(BASE_PATH . 'core/database.php');
require_once(BASE_PATH . 'core/request.php');
require_once(BASE_PATH . 'core/response.php');

$routes = [
    'home' => BASE_PATH . 'controllers/home.controller.php',
    'about' => BASE_PATH . 'controllers/about.controller.php',
    'posts' => BASE_PATH . 'controllers/posts.controller.php',
    'contact' => BASE_PATH . 'controllers/contact.controller.php',
    'send-message' => BASE_PATH . 'controllers/send-message.controller.php',
    'post' => BASE_PATH . 'controllers/post.controller.php'
];

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if (array_key_exists($page, $routes)) {
        $page = $routes[$page];
        require_once($page);
    } else {
        require_once('views/404.view.php');
    }
} else {
    require_once($routes['home']);
}
