<?php

$sql = "CREATE TABLE IF NOT EXISTS `categories` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Categories table created successfully"  . "<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "INSERT INTO `categories` (`title`) 
        VALUES ('PHP'),
        ('JavaScript'),
        ('HTML'),
        ('CSS'),
        ('MySQL')";

mysqli_query($conn, $sql);
