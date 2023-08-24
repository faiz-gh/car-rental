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
        <div class="login-form">
            <label for="email">
                Email:
            </label>
            <input type="email" name="email" placeholder="Enter your Email">
            <br>
            <label for="password">
                Password:
            </label>
            <input type="password" name="password" placeholder="Enter your Password">
            <br>
            <a href="home.php"><button type="submit" name="submit" value="submit">Submit</button></a>
            <a href="register.php">Create Account</a>
        </div>
    </div>

    <!-- Scripts Module -->
    <?php include "./modules/scripts.php" ?>
</body>

</html>