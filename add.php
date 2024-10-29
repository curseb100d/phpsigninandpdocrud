<?php
include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    try {
        // Prepare SQL statement using placeholders for security
        $sql = "INSERT INTO `crud` (name, email, mobile, password) VALUES (:name, :email, :mobile, :password)";
        
        // Prepare the statement
        $stmt = $pdo->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':password', $password);

        // Execute the statement
        $stmt->execute();

        // Redirect to display.php if insertion is successful
        header('location:display.php');
    } catch (PDOException $e) {
        // If an error occurs, display an error message
        die("Error: " . $e->getMessage());
    }
}

?>
