<?php
require_once 'helpers.php';
// require_once 'mail.php';
// include('database/connection.php');
// include_once('route/route.php');

?>

<!doctype html>
<html lang="en">
<head>
<?php include_once('include/meta.php') ?>
	<title>Yoga Training | Arden University</title>
</head>
<body>


	<!--Doc Wrapper-->
	<div id="wrapper">
		<?php include_once('include/header.php') ?>		  
        <!--Start of slider Section --> 	
		<div class="slideshow-container">
			<div class="mySlides fade">
			  <img src="https://user-images.githubusercontent.com/36181066/36353023-fc3affca-14e6-11e8-9baa-f9223f6f0494.jpg" alt="yogapic" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <img src="https://user-images.githubusercontent.com/36181066/36353027-08b43316-14e7-11e8-90b3-ea624f0fd27b.jpg" alt="yogapic" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <img src="https://user-images.githubusercontent.com/36181066/36353034-1cf6f3d6-14e7-11e8-834d-eae6e47ba4bb.jpg" alt="yogapic" style="width:100%">
			</div>
		</div>
		<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
		</div>
        <!--End of Slider Section -->
		
         <script src="main.js"></script> <!--javascript reference-->

        <!--start of why us section -->
        <a name="why-us-link">
		<section>
				<h2 class="feature">WHY CHOOSE US</h2>
				<div class="one-third">
					<div class="icon"><i class="fa fa-group"></i></div>
					<h3>Best Trainers</h3>
					<p>	
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					</p>
			    </div>

				<div class="one-third">
					<div class="icon"><i class="fa fa-map-marker"></i></div>
					<h3>Local & Convenient</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					</p>
				</div>

				<div class="one-third">
					<div class="icon"><i class="fa fa-check"></i></div>
					<h3>Check Us Out- Free!</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
		</section>
       <!--End of why us section-->
		
		<!--start of classes section -->
		<a name="classes-link">
		<section>
				<h2 class="feature">CLASSES</h2>
				<div class="one-third">
					<img src="https://user-images.githubusercontent.com/36181066/36353023-fc3affca-14e6-11e8-9baa-f9223f6f0494.jpg" alt="yogapose" class="classes">
					<h3>ONE ON ONE SESSIONS</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
					</p>
				</div>	
			
				<div class="one-third">
					<img src="https://user-images.githubusercontent.com/36181066/36353034-1cf6f3d6-14e7-11e8-834d-eae6e47ba4bb.jpg" alt="yogapose" class="classes">
					<h3>GROUP INDOOR YOGA</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
					</p>
				</div>

				<div class="one-third">
					<img src="https://image.ibb.co/hufvS7/y4.jpg" alt="y4" border="0">
					<h3>CHILDREN CORNER</h3>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
				</p>
				</div>
		</section>
		<!--End of classes section -->

		<!--pricing section-->
		<a name="pricing-link">
		<section>
			<div class="container">
				<h2 class="feature">PRICING & TIMINGS</h2>
				<div style="width: 100%">
					<table>
						<tr>
							<th>MEMBERSHIP PACKAGE</th>
							<th>MONTHLY</th>
							<th>YEARLY</th>
						</tr>
						<tr>
							<td>One on One session</td>
							<td>$30</td>
							<td>$300</td>
						</tr>

						<tr>
							<td>Group Inddor Yoga</td>
							<td>$25</td>
							<td>$250</td>
						</tr>

						<tr>
							<td>Children Corner</td>
							<td>$20</td>
							<td>$200</td>
						</tr>
						<tr>
							<td>Power Yoga</td>
							<td>$40</td>
							<td>$400</td>
						</tr>
					</table>
				</div>
				<br><br>
				<div style="width: 100%">

					<table>
						<tr>
							<th>TIMINGS</th>
							<th>MORNINGS</th>
							<th>EVENINGS</th>
						</tr>
						<tr>
							<td>Week Days</td>
							<td>6:00 AM - 12:00 PM</td>
							<td>6:00 PM - 8:00 PM</td>
						</tr>

						<tr>
							<td>Weekends</td>
							<td>6:00 AM - 01:00 PM</td>

							<td>4:00 PM - 8:00 PM</td>
						</tr>
					</table>
				</div>
			</div>
		</section>
		<!--End of Pricing Section-->

		<!--start of Testimonial Section-->
		<a name="testimonial-link">			
		<section class="testimonials">
			<h2 class="feature">OUR CUSTOMERS</h2>
			<div class="one-third">
				<p class="detail">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
				</p>
				<cite><img src="https://user-images.githubusercontent.com/36181066/36353018-f24a50ce-14e6-11e8-9e1e-ccb007af8915.png" alt="Testimonial"><span style="margin-left:-280px;">Smith</span></cite>
			</div>
				
			<div class="one-third">
						
				<p class="detail">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
				</p>
				<cite><img src="https://user-images.githubusercontent.com/36181066/36353018-f24a50ce-14e6-11e8-9e1e-ccb007af8915.png" alt="Testimonial"><span style="margin-left:-280px;">Smith</span></cite>
			</div>
				
			<div class="one-third" id="hide-in-sd">
						
				<p class="detail">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
				</p>
				<cite><img src="https://user-images.githubusercontent.com/36181066/36353018-f24a50ce-14e6-11e8-9e1e-ccb007af8915.png" alt="Testimonial"><span style="margin-left:-280px;">Smith</span></cite>
			</div>
		</section>
		<!--End of Testimonial Section-->


		<!--Start of Contact Us Section-->
		<a name="contact-link">
		<section class="contact">
			<div class="contactWrapper">
				<h3 style="text-decoration: underline;">CONTACT US</h3>
				<br>
				<p class="contact-address">
					yoga4life<br>
					<strong class="phone">1900-1900-20</strong><br><br>
					Park Street Road<br>
					Kolkata, 700001<br>
					yoga4life@gmail.com
				</p>
				<br>
				<ul class="social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
			<div class="contactWrapper">
				<h3 style="text-decoration: underline;">OUR LOCATION</h3>
				<br>
				<div class="google-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14739.171669343103!2d88.34801924730236!3d22.54942881194972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1515690702986" width="500" height="250" style="border:0" allowfullscreen></iframe>
				</div>

			</div>
		</section>
		<!--End of Contact Us Section-->
      
		<!--Copyright section-->
		<footer>
			<p>&copy;yoga4life, 2018</p>
		</footer>


	</div>
	<!--End Doc Wrapper-->


<div class="container">
        <h1>User Information</h1>

        <!-- Table to display users -->
        <table id="userTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["password"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No users found</td></tr>";
                }

                // Close connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>


	<!-- JavaScript -->
	<script src="assets/customer/js/custom.js"></script>
</body>


</html>