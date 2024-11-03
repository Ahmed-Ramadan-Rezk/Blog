<?php

if (method("GET")) {
    $id = $_GET['id'] ?? null;

    if ($id) {
        $oldImage = getRow('posts', $id);

        if (file_exists(uploadPath($oldImage['image']))) {
            unlink(uploadPath($oldImage['image']));
            $result = delete('posts', $id);
        }

        if ($result) {
            sessionStore('success', 'Post deleted successfully');
        }
    }
}

redirect(adminUrl('posts'));
