<?php
include 'config.php';

if (isset($_POST['add'])) {
    $CompanyName = $_POST['CompanyName'];
    $CorrectDob = $_POST['CorrectDob'];
    $Leads = $_POST['Leads'];
    $LeadsID = $_POST['LeadsID'];
    $ProductType = $_POST['ProductType'];
    $ToyotaDealer = $_POST['ToyotaDealer'];

    try {
        $stmt = $pdo->prepare("INSERT INTO mcc_transm (CompanyName, CorrectDob, Leads, LeadsID, ProductType, ToyotaDealer) VALUES (:CompanyName, :CorrectDob, :Leads, :LeadsID, :ProductType, :ToyotaDealer)");
        $stmt->execute(['CompanyName' => $CompanyName, 'CorrectDob' => $CorrectDob, 'Leads' => $Leads, 'LeadsID' => $LeadsID, 'ProductType' => $ProductType, 'ToyotaDealer' => $ToyotaDealer]);
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>