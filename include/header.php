<!--start Header -->
<header>
    <div id="callout">
        <h3>&#9742;1900-1900-20</h3>
        <p>Park street Road, Kolkata-700001</p>
    </div>
    <div id="logo">
        <a href="index.html"><img src="https://user-images.githubusercontent.com/36181066/36353002-a5dc839c-14e6-11e8-8be2-f0a51f40bdd2.png" alt="logo img"></a>
    </div>
</header>
<!--End Header -->

<!--Start Navigation -->
<nav>
    <a href="#" id="menu-icon"></a>
    
    <ul >
        <li><a href="home">Home</a></li>
        <li><a href="#why-us-link">Why Us</a></li>
        <li><a href="#classes-link">Classes</a></li>
        <li><a href="#pricing-link">Pricing</a></li>
        <li><a href="#testimonial-link">Testimnials</a></li>
        <li><a href="contact">Contact Us</a></li>

        <?php 
        if (isset($_SESSION["logged_in"])) {
            echo '<li><a href="logout">log Out</a></li>';
        }else{
            echo '<li><a href="login">Log in</a></li>';
        }
        ?>
    </ul>
    
</nav>
<!--End Navigation -->	

<!--Start Style -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="assets/customer/css/custom.css">
	<!-- Favicon Link -->
	<link rel="shortcut icon" type="image/png" href="<?=$logo ?>">