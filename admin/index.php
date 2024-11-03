<?php
session_start();
define('BASE_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('ADMIN_PATH', __DIR__ . DIRECTORY_SEPARATOR);
define('BASE_URL', 'http://localhost:3000/');
require_once(BASE_PATH . 'data/connection.php');
require_once(BASE_PATH . 'core/sessions.php');
require_once(BASE_PATH . 'core/database.php');
require_once(BASE_PATH . 'core/request.php');
require_once(BASE_PATH . 'core/response.php');

$routes = [
    'home' => ADMIN_PATH . 'controllers/home.controller.php',
    'add-post' => ADMIN_PATH . 'controllers/add-post.controller.php',
    'store-post' => ADMIN_PATH . 'controllers/store-post.controller.php',
    'edit-post' => ADMIN_PATH . 'controllers/edit-post.controller.php',
    'delete-post' => ADMIN_PATH . 'controllers/delete-post.controller.php',
    'update-post' => ADMIN_PATH . 'controllers/update-post.controller.php',
    'posts' => ADMIN_PATH . 'controllers/posts.controller.php',
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
