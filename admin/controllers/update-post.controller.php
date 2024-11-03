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

        // Get old image
        $getImage = getRow('posts', $id);
        $oldImage = $getImage['image'];

        if (file_exists(uploadPath($oldImage))) {
            unlink(uploadPath($oldImage));
        }

        $newFileName = uniqid("", true) . $fileName;
        $fileDestination = uploadPath($newFileName);
        move_uploaded_file($tmp_name, $fileDestination);

        $result = update('posts', [
            'image' => $newFileName,
            'title' => $title,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s')
        ], $id);

        if ($result) {
            sessionStore('success', 'Post have been updated successfully');
        }
    } else {
        sessionStore('errors', $errors);
    }
    redirect(adminUrl('edit-post&id=' . $id));
} else {
    redirect(adminUrl('home'));
}
