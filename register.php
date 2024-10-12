<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to styles.css -->
    <link rel="stylesheet" href="styles-signup.css">
    <title>Sign Up</title>
</head>
<body>
    <forn action="">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill out this form to create an account.</P>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <label for="passwordrepeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="passwordrepeat" id="passwordrepeat" required>

            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </form>
</body>
</html>