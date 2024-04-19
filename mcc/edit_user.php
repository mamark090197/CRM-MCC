<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['CompanyName' => $CompanyName]);
    $trans = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$trans) {
        die("User not found.");
    }
}

if (isset($_POST['edit'])) {

    $CompanyName= $_POST['CompanyName'];
    $CorrectDob = $_POST['CorrectDob'];
    $Leads = $_POST['Leads'];
    $LeadsID = $_POST['LeadsID'];
    $age = $_POST['"ProductType'];
    $ToyotaDealer = $_POST['ToyotaDealer'];

    $stmt = $pdo->prepare("UPDATE mcc_transm SET name = :CompanyName, CorrectDob, Leads, LeadsID, ProductType, ToyotaDealer  = :CompanyName, CorrectDob WHERE CompanyName = :iCompanyName");
    // $stmt->execute(['name' => $name, 'email' => $email, 'age' => $age, 'id' => $id]);
    $stmt->execute(['CompanyName' => $CompanyName, 'CorrectDob' => $CorrectDob, 'Leads' => $Leads, 'LeadsID' => $LeadsID, 'ProductType' => $ProductType, 'ToyotaDealer' => $ToyotaDealer]);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="edit_user.php?id=<?php echo $CompanyName['CompanyName']; ?>" method="post">
        <!-- <input type="text" name="name" placeholder="Name" value="<?php echo $user['name']; ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?php echo $user['email']; ?>" required>
        <input type="number" name="age" placeholder="Age" value="<?php echo $user['age']; ?>" required> -->

        <input type="text" name="CompanyName" placeholder="CompanyName" required>
        <input type="text" name="CorrectDob" placeholder="CorrectDob" required>
        <input type="text" name="Leads" placeholder="Leads" required>
        <input type="text" name="LeadsID" placeholder="LeadsId" required>
        <input type="text" name="ProductType" placeholder="ProductType" required>
        <input type="text" name="ToyotaDealer" placeholder="ToyotaDealer" required>

        <button type="submit" name="edit">Save Changes</button>
    </form>
</body>
</html>
