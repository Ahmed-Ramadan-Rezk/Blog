<?php


$sql = "CREATE TABLE IF NOT EXISTS `messages` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `message` TEXT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Messages table created successfully" . "<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
