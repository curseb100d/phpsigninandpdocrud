<?php
include 'config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    try {
        // Prepare the SQL DELETE query with a placeholder
        $sql = "DELETE FROM `crud` WHERE id = :id";
        $stmt = $pdo->prepare($sql);

        // Bind the ID parameter to the placeholder
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();

        // Redirect to display.php if the deletion is successful
        header('location:display.php');
    } catch (PDOException $e) {
        // Handle any errors that occur during the deletion
        die("Error: " . $e->getMessage());
    }
}
?>
