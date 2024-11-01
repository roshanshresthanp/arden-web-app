<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
<div id="wrapper">
    <?php include_once('include/header.php') ?>	
    <div class="pt"></div>
        <div class="contact-container">
        <h3 style="padding-bottom:15px">Contact Us</h3>
        <form id="contactForm">
            <div id="error-message" class="error">Please fill in all fields correctly.</div>
            
            <input type="text" id="name" placeholder="Your Name">
            <input type="email" id="email" placeholder="Your Email">
            <textarea id="message" placeholder="Your Message"></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<script>
    // Form validation function
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();
        const errorMessage = document.getElementById('error-message');
        
        // Check if all fields are filled
        if (name === '' || email === '' || message === '') {
            errorMessage.style.display = 'block';
            event.preventDefault(); // Prevent form submission
        } else {
            errorMessage.style.display = 'none';
            alert('Message sent successfully!');
        }
    });
</script>

</body>
</html>
