<?php
if (method("POST")) {
    foreach ($_POST as $key => $value) {
        $$key = filter($value);
    }

    require_once(BASE_PATH . 'validations/contact.validation.php');

    if (empty($errors)) {
        $result = insert('messages', [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        if ($result) {
            sessionStore('success', 'Message sent successfully');
        }
    } else {
        sessionStore('errors', $errors);
    }
    redirect(BASE_URL . 'index.php?page=contact');
} else {
    redirect(BASE_URL . 'index.php?page=home');
}
