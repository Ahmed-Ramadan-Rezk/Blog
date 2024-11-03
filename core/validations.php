<?php

function required(string $input): bool
{
    if (empty($input)) {
        return true;
    }
    return false;
}

function isString(string $input): bool
{
    if (!preg_match("/^[a-zA-Z ]*$/", $input)) {
        return true;
    }
    return false;
}


function less(string $input, int $length): bool
{
    if (strlen($input) < $length) {
        return true;
    }
    return false;
}


function greater(string $input, int $length): bool
{
    if (strlen($input) > $length) {
        return true;
    }
    return false;
}

function email(string $input): bool
{
    if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}

function phone(string $input): bool
{
    if (!preg_match(
        "/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/",
        $input
    )) {
        return true;
    }
    return false;
}
