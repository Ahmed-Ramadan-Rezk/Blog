<?php

$sql = "CREATE TABLE IF NOT EXISTS `posts` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `content` TEXT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Posts table created successfully" . "<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "INSERT INTO `posts` (`title`, `content`) 
        VALUES ('PHP', 'PHP is a server side scripting language'),
        ('JavaScript', 'JavaScript is a client side scripting language'),
        ('HTML', 'HTML is a markup language'),
        ('CSS', 'CSS is a styling language'),
        ('MySQL', 'MySQL is a database')";

mysqli_query($conn, $sql);
