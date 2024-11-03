<?php

if (method('GET')) {
    $id = $_GET['id'] ?? null;

    if ($id) {
        $row = getRow('posts', $id);
    }
} else {
    redirect(adminUrl('posts'));
}

require_once(adminView('posts/edit'));
