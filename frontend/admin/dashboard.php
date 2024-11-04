<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
<link rel="stylesheet" href="assets/admin/css/custom.css">
<!-- Sidebar -->
<?php include('include/sidebar.php') ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Top Bar -->
    <div class="top-bar">
        <h3>Dashboard</h3>
        <!-- <div class="admin-info">Welcome</div> -->
    </div>

    <!-- Dashboard Content -->
    <div class="dashboard-cards">
        <div class="card">
            <h4>Total Users</h4>
            <p>1,234</p>
        </div>
        <div class="card">
            <h4>Yoga Type</h4>
            <p>567</p>
        </div>
        <div class="card">
            <h4>Classes</h4>
            <p>45</p>
        </div>
        <div class="card">
            <h4>Revenue</h4>
            <p>$12,345</p>
        </div>
    </div>

    <div id="add-user" class="form-container">
        <h4>Add User</h4>
        <form>
            <label for="user-name">Name</label>
            <input type="text" id="user-name" placeholder="Enter user name">
            
            <label for="user-email">Email</label>
            <input type="email" id="user-email" placeholder="Enter user email">
            
            <label for="user-role">Role</label>
            <select id="user-role">
                <option value="admin">Admin</option>
                <option value="customer">Customer</option>
            </select>
            
            <button type="submit">Add User</button>
        </form>
    </div>
    
</div>

    



</body>
</html>
