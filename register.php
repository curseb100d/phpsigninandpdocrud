<?php include 'register-logic.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to styles.css -->
    <link rel="stylesheet" href="register-styles.css">
    <title>Sign Up</title>
</head>
<body>
    <forn action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill out this form to create an account.</P>

            <label><b>Username</b></label>
            <input type="text" name="username" required class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">

            <label><b>Password</b></label>
            <input type="password" name="password" required class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">

            <label><b>Confirm Password</b></label>
            <input type="password" name="confirm_password" required class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">

            <button type="submit" class="registerbtn" value="Submit">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </form>
</body>
</html>