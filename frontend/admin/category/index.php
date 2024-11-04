<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="../assets/admin/css/custom.css">
</head>
<body>

<!-- Sidebar -->
<!-- require '../auth/auth.php'; -->

 <?php
//   include('../include/sidebar.php');

  include __DIR__ . '/../include/sidebar.php';

  ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Top Bar -->
    <div class="top-bar">
        <h3>Dashboard</h3>
        <div class="admin-info">Welcome, Admin</div>
    </div>

    <!-- Add User Form -->
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

    <!-- Add Product Form -->
    <div id="add-product" class="form-container">
        <h4>Add Product</h4>
        <form>
            <label for="product-name">Product Name</label>
            <input type="text" id="product-name" placeholder="Enter product name">
            
            <label for="product-price">Price</label>
            <input type="number" id="product-price" placeholder="Enter product price">
            
            <label for="product-description">Description</label>
            <textarea id="product-description" placeholder="Enter product description"></textarea>
            
            <button type="submit">Add Product</button>
        </form>
    </div>

    <!-- Settings Form -->
    <div id="settings" class="form-container">
        <h4>Settings</h4>
        <form>
            <label for="admin-email">Admin Email</label>
            <input type="email" id="admin-email" placeholder="Enter admin email">
            
            <label for="admin-password">Password</label>
            <input type="password" id="admin-password" placeholder="Enter new password">
            
            <button type="submit">Save Settings</button>
        </form>
    </div>
</div>

</body>
</html>
