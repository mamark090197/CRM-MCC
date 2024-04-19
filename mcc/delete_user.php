<?php
include 'config.php';

if (isset($_GET['CompanyName'])) {
    $id = $_GET['CompanyName'];

    $stmt = $pdo->prepare("DELETE FROM mcc_transm WHERE CompanyName = :CompanyName");
    $stmt->execute(['CompanyName' => $CompanyName]);

    header("Location: index.php");
    exit();
}
?>
