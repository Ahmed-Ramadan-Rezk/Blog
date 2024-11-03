<?php
if (method("POST")) {
    foreach ($_POST as $key => $value) {
        $$key = filter($value);
    }

    foreach ($_FILES['file'] as $key => $value) {
        $$key = $value;
    }

    require_once(ADMIN_PATH . 'validations/post.validation.php');

    if (empty($errors)) {

        // Move file to uploads folder
        $newFileName = uniqid("", true) . $fileName;
        $fileDestination = uploadPath($newFileName);
        move_uploaded_file($tmp_name, $fileDestination);

        $result = insert('posts', [
            'image' => $newFileName,
            'title' => $title,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        if ($result) {
            sessionStore('success', 'Post have been published successfully');
        }
    } else {
        sessionStore('errors', $errors);
    }
    redirect(adminUrl('add-post'));
} else {
    redirect(adminUrl('home'));
}
