<?php
include 'config.php';

// Get data from database by ID
$id = $_GET['updateid'];

try {
    // Prepare the SQL statement to fetch the data by ID
    $sql = "SELECT * FROM `crud` WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Fetch the record
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
    
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    try {
        // Prepare the SQL statement to update the data
        $sql = "UPDATE `crud` SET name = :name, email = :email, mobile = :mobile, password = :password WHERE id = :id";
        $stmt = $pdo->prepare($sql);

        // Bind parameters to the SQL statement
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the update query
        $stmt->execute();

        // Redirect to display.php if the update is successful
        header('location:display.php');
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user-style.css">
    <title>CRUD Operation Update</title>
</head>
<body>
    <form action="" method="POST">
        <div class="container">
            <h1>CRUD Operation</h1>
            <p>Please fill out this form to update.</P>

            <label><b>Name</b></label>
            <input type="text" name="name" required value="<?php echo $name; ?>">

            <label><b>Email</b></label>
            <input type="email" name="email" required value="<?php echo $email; ?>">

            <label><b>Mobile</b></label>
            <input type="text" name="mobile" required value="<?php echo $mobile; ?>">

            <label><b>Password</b></label>
            <input type="password" name="password" required value="<?php echo $password; ?>">

            <button type="submit" name="submit">Update</button>
        </div>
    </form>
</body>
</html>
