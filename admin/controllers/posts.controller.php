<?php

$posts = select('posts');

require_once(adminView('posts/index'));
