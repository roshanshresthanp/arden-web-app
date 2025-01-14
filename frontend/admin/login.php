<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <div id="wrapper">
        <?php include_once 'include/header.php'; ?>
        <div class="pt"></div>
        <div class="login-container">

            <?php
            if (isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in'])) {
                echo '<h3 style="padding: bottom 15px;">User is already logged in</h3>';
            }else{
                echo '<h3 style="padding-bottom:15px">Log in</h3>';
            }
            ?>
            <form action="controllers/loginController.php" method="POST">

                <?php
                if (isset($_SESSION['message'])) {
                    echo '<div class="message">' . $_SESSION['message'] . '</div>';
                    unset($_SESSION['message']); // Clear the message after displaying it
                }
                ?>
                <div id="error-message" class="error">Please fill in all fields correctly.</div>


                <!-- Email Field -->
                <input type="email" id="email" placeholder="Email" name="email">

                <!-- Password Field -->
                <input type="password" id="password" placeholder="Password" name="password">    
                <!-- Submit Button -->
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
