<?php
require_once(BASE_PATH . 'core/validations.php');

$errors = [];
if (required($title)) {
    $errors['title'] = 'Title is required';
} elseif (less($title, 3)) {
    $errors['title'] = 'Title must be at least 3 characters';
} elseif (greater($title, 200)) {
    $errors['title'] = 'Title must be less than 200 characters';
} elseif (isString($title)) {
    $errors['title'] = 'Title must be a string';
}

if (required($content)) {
    $errors['content'] = 'Content is required';
} elseif (less($content, 10)) {
    $errors['content'] = 'Content must be at least 10 characters';
} elseif (greater($content, 1000)) {
    $errors['content'] = 'Content must be less than 1000 characters';
} elseif (isString($content)) {
    $errors['content'] = 'Content must be a string';
}

$fileName = str_replace(' ', '', $name);
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png', 'webp');

if ($fileName === "") {
    $errors['file'] = "File is required";
}

if ($error === 0) {
    if (!in_array($fileActualExt, $allowed)) {
        $errors['file'] = "File type not allowed";
    }
    if ($size > 1000000) {
        $errors['file'] = "File is too large";
    }
}
