<?php

$posts = select('posts', '*', 'LIMIT 3');

require_once(BASE_PATH . 'views/home.view.php');
