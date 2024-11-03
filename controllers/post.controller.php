<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = getRow('posts', $id);
    require_once(BASE_PATH . 'views/post.view.php');
}
