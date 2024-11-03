<?php

function method(string $method): bool
{
    if ($_SERVER['REQUEST_METHOD'] === $method) {
        return true;
    }
    return false;
}


function filter(string $data): string
{
    return trim(htmlentities(htmlspecialchars($data)));
}

function adminPublicPath(string $path): string
{
    return BASE_URL . 'admin/public/' . $path;
}

function adminUrl(string $pageName): string
{
    return BASE_URL . 'admin/index.php?page=' . $pageName;
}

function adminView(string $fileName): string
{
    return ADMIN_PATH . 'views/' . $fileName . '.view.php';
}

function uploadPath(string $fileName): string
{
    return ADMIN_PATH . 'uploads/' . $fileName;
}
