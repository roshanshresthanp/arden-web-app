
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div id="wrapper">
    <?php include_once('include/header.php') ?>	
    <div class="pt"></div>	
    <div class="login-container">
        <h3 style="padding-bottom:15px">Dashboard in</h3>

        <!-- <form id="loginForm" onsubmit="return validateLoginForm()"> -->
            <form action="controllers/loginController.php" method="POST">
            <div id="error-message" class="error">Please fill in all fields correctly.</div>

            <!-- Email Field -->
            <input type="email" id="email" placeholder="Email" name="email" >

            <!-- Password Field -->
            <input type="password" id="password" placeholder="Password" name="password">

            <!-- Role Selection -->
            <select id="role" >
                <option value="" disabled selected>Select Role</option>
                <option value="admin">Admin</option>
                <option value="customer">Customer</option>
            </select>

            <!-- Submit Button -->
            <button type="submit">Login</button>
        </form>
    </div>
    </div>


</body>
</html>
