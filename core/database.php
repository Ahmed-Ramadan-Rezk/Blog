<?php

function select(string $table, string $columns = '*', string $limit = ""): array
{
    global $conn;
    $sql = "SELECT $columns FROM $table $limit";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return [];
    }
    return mapData($result);
}

function getRow(string $table, string $id): array
{
    global $conn;
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result) ?? [];
}

function mapData(object $data): array
{
    $allData = [];
    while ($row = mysqli_fetch_assoc($data)) {
        $allData[] = $row;
    }

    return $allData;
}

function insert(string $table, array $data): bool
{
    global $conn;
    $columns = '`' . implode('`' . ',' . '`', array_keys($data)) . '`';
    $values = "'" . implode("'" . ',' . "'", array_values($data)) . "'";
    $sql = "INSERT INTO $table ($columns) VALUES ($values)";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function delete(string $table, string $id): bool
{
    global $conn;
    $sql = "DELETE FROM $table WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function update(string $table, array $data, $id): bool
{
    global $conn;
    $columns = '';
    foreach ($data as $key => $value) {
        $columns .= $key . ' = ' . "'" . $value . "'" . ',';
    }
    $columns = rtrim($columns, ',');
    $sql = "UPDATE $table SET $columns WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return $result;
}
