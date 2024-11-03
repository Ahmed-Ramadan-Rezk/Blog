<?php
$sql = "CREATE TABLE IF NOT EXISTS `users` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `role` ENUM('admin', 'user') NOT NULL DEFAULT 'user',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Users table created successfully"  . "<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$password = password_hash('password', PASSWORD_DEFAULT);
$sql = "INSERT INTO `users` (`name`, `email`, `phone`, `password`) 
        VALUES('ahmed', 'ahmed@gmail.com', '0123456789', '$password'),
        ('mostafa', 'mostafa@gmail.com', '0123456349', '$password'),
        ('ali', 'ali@gmail.com', '0123456432', '$password'),
        ('samy', 'samy@gmail.com', '0123456232', '$password')";

mysqli_query($conn, $sql);
