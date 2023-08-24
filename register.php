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
            <label for="firstname">
                Firstname:
            </label>
            <input type="text" name="firstname" placeholder="Enter your First Name">
            <br>
            <label for="lastname">
                Lastname:
            </label>
            <input type="text" name="lastname" placeholder="Enter your Last Name">
            <br>
            <label for="email">
                Email:
            </label>
            <input type="email" name="email" placeholder="Enter your Email">
            <br>
            <label for="phone">
                Phone:
            </label>
            <input type="text" name="phone" placeholder="Enter your Phone Number" pattern="[0-9]{10}" title="This field must be 10 digits including [0-9]">
            <br>
            <label for="password">
                Password:
            </label>
            <input type="password" name="password" placeholder="Enter your Password">
            <br>
            <label for="confirmpassword">
                Password:
            </label>
            <input type="password" name="confirmpassword" placeholder="Re-Enter your Password">
            <br>
            <button type="submit" name="submit" value="submit">Submit</button>
            <br>
            <a href="index.php">Return to Login?</a>
        </div>
    </div>

    <!-- Scripts Module -->
    <?php include "./modules/scripts.php" ?>
</body>

</html>