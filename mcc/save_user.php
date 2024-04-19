<?php
include 'config.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $stmt = $pdo->prepare("INSERT INTO users (name, email, age) VALUES (:name, :email, :age)");
    $stmt->execute(['name' => $name, 'email' => $email, 'age' => $age]);

    header("Location: index.php");
    exit();
}
?>
