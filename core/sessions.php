<?php

function sessionStore(string $key, string|array $value): void
{
    $_SESSION[$key] = $value;
}

// Display session Error
function error(string $name): void
{
    if (isset($_SESSION['errors'][$name])) {
        echo '<p class="text-danger small mt-2">' . $_SESSION['errors'][$name] . '</p>';
    }

    unset($_SESSION['errors'][$name]);
}

// Display session Success
function success(string $key): void
{
    if (isset($_SESSION[$key])) {
        echo '<p class="alert alert-success p-1 text-center">' . $_SESSION[$key] . '</p>';
    }

    unset($_SESSION[$key]);
}
