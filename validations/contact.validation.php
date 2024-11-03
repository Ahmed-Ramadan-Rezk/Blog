<?php
require_once(BASE_PATH . 'core/validations.php');

$errors = [];

if (required($name)) {
    $errors['name'] = 'Name is required';
} elseif (less($name, 3)) {
    $errors['name'] = 'Name must be at least 3 characters';
} elseif (greater($name, 200)) {
    $errors['name'] = 'Name must be less than 200 characters';
} elseif (isString($name)) {
    $errors['name'] = 'Name must be a string';
}

if (required($email)) {
    $errors['email'] = 'Email is required';
} elseif (email($email)) {
    $errors['email'] = 'Email is not valid';
}

if (required($phone)) {
    $errors['phone'] = 'Phone is required';
} elseif (phone($phone)) {
    $errors['phone'] = 'Phone is not valid';
}

if (required($message)) {
    $errors['message'] = 'Message is required';
} elseif (less($message, 10)) {
    $errors['message'] = 'Message must be at least 10 characters';
} elseif (greater($message, 1000)) {
    $errors['message'] = 'Message must be less than 1000 characters';
}
