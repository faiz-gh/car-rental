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
        <form class="login-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <h2>Login Form</h2>
            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" placeholder="Enter your Email">
            </fieldset>
            <fieldset>
                <legend>Password</legend>
                <input type="password" name="password" placeholder="Enter your Password" pattern="{8,}" title="Password Not Valid">
            </fieldset>
            <a href="home.php"><button type="submit" name="submit">Login</button></a>
            <a href="register.php">Create Account?</a>
        </form>
    </div>

    <!-- Scripts Module -->
    <?php include "./modules/scripts.php" ?>
</body>

</html>