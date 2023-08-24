<!doctype html>
<html lang="en">

<head>
    <!-- DB Connection Module -->
    <?php include "./modules/dbconnection.php" ?>

    <title>Car Rental | Home</title>

    <!-- Header Module -->
    <?php include "./modules/header.php" ?>
</head>

<body>
    <!-- Main Wrapper -->
    <div class="content-wrapper">
        <form class="register-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <h2>Registration Form</h2>
            <fieldset>
                <legend>Fullname</legend>
                <input type="text" name="fullname" placeholder="John Doe" pattern="[a-z A-Z]+" title="Avoid using special character or numbers" required>
            </fieldset>
            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" placeholder="example@domain.com" required>
            </fieldset>
            <fieldset>
                <legend>Phone</legend>
                <input type="text" name="phone" placeholder="9090909090" pattern="[0-9]{10}" title="Number must be 10 digits" required>
            </fieldset>
            <fieldset>
                <legend>Password</legend>
                <input type="password" name="password" placeholder="Enter your Password" pattern=".{8,}" title="Should be atleast 8 characters long" required>
            </fieldset>
            <fieldset>
                <legend>Confirm Password</legend>
                <input type="password" name="confirmpassword" placeholder="Re-Enter your Password" required>
            </fieldset>
            <button type="submit" name="submit">Register</button>
            <a href="index.php">Return to Login?</a>
        </form>
    </div>

    <!-- Scripts Module -->
    <?php include "./modules/scripts.php" ?>
</body>

</html>