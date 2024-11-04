<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="../../assets/admin/css/custom.css">
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

<?php
if (isset($_SESSION['message'])) {
    echo '<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
  ' . htmlspecialchars($_SESSION['message']) . '
</div>';
    unset($_SESSION['message']); // Clear the message after displaying it
}   
?>

<!-- <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  This is a simple alert message!
</div> -->
    <!-- Top Bar -->
    <div class="top-bar">
        <h3>Yoga Category</h3>
        <!-- <div class="admin-info">Welcome, Admin</div> -->
    </div>

    <!-- Add User Form -->
    <div class="form-container">
    <h2>Yoga Category</h2>
    <form class="form-control" action="../../controllers/categoryController.php " enctype="multipart/form-data" method="POST">
        <!-- Text input -->
        <label for="name">Title</label>
        <input type="text" name=title id="name" placeholder="Enter title" required>

        <!-- Email input -->
        <!-- <label for="email">Email</label>
        <input type="email" name = "" id="email" placeholder="Enter your email" required> -->

        <!-- Textarea -->
        <label for="message">Description</label>
        <textarea id="message" placeholder="Enter description" name="description"></textarea>

        <!-- Radio buttons -->
        <div class="radio-group">
            <label>Publish Status</label>
            <label><input type="radio" name="status" value="1" required> Active</label>
            <label><input type="radio" name="status" value="0"> Inactive</label>
        </div>

        <!-- Checkboxes -->
        <!-- <div class="checkbox-group">
            <label>Interests</label>
            <label><input type="checkbox" name="interests" value="sports"> Sports</label>
            <label><input type="checkbox" name="interests" value="music"> Music</label>
            <label><input type="checkbox" name="interests" value="tech"> Technology</label>
        </div> -->

        <!-- Select dropdown -->
        <!-- <label for="country">Country</label>
        <select id="country" required>
            <option value="">Select your country</option>
            <option value="us">United States</option>
            <option value="ca">Canada</option>
            <option value="uk">United Kingdom</option>
            <option value="in">India</option>
            <option value="other">Other</option>
        </select> -->

        <!-- Date input -->
        <!-- <label for="dob">Date of Birth</label>
        <input type="date" id="dob" required> -->

        <!-- Time input -->
        <!-- <label for="appointment">Preferred Appointment Time</label>
        <input type="time" id="appointment"> -->

        <!-- File input -->
        <label for="resume">Image</label>
        <input type="file" id="resume" accept=".jpeg,.jpg,.png,.svg,.web" name="image">

        <!-- Submit button -->
        <button type="submit">Submit</button>
    </form>
</div>
</div>

</body>
</html>
