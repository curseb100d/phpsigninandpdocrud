<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to styles.css -->
    <link rel="stylesheet" href="styles.css">
    <title>PDO CRUD</title>
</head>
<body>
    <!-- Top Navigation -->
    <?php
        include 'topnavigation.php';
    ?>

<!-- Table -->
<div class="content">
    <h2> Employees Details<h2>
    <a href="create.php" class="btn">Add a New Employee</a>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>
    </table>
</div>
</body>
</html>