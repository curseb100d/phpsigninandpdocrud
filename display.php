<!-- Include connect.php -->
<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user-style.css">
    <title>CRUD Operation Read</title>
</head>
<body>
    <form>
        <div class="container">
            <button class="button"><a href="add.php">Add User</a></button>
            
            <h1>CRUD Table</h1>
            <table>
                <tr>
                    <th>ID No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Operations</th>
                </tr>
                <?php
                try {
                    // Prepare the SQL query to fetch all records from the 'crud' table
                    $sql = "SELECT * FROM `crud`";
                    $stmt = $pdo->query($sql);

                    // Fetch all the records
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '
                        <tr>
                            <td><b>'.$id.'</b></td>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$password.'</td>
                            <td>
                                <button><a href="update.php?updateid='.$id.'">Update</a></button>
                                <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                            </td>
                        </tr>';
                    }
                } catch (PDOException $e) {
                    // Handle any errors that occur during the query
                    die("Error: " . $e->getMessage());
                }
                ?>
            </table>
        </div>
    </form>
</body>
</html>
