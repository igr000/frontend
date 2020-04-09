<!-------------------------------------------------------------------------
-- Materializecss_frontend.php contains the content of the website. -------
---------------------------------------------------------------------------
-- Author: Irene Gayle Roque ----------------------------------------------
-------------------------------------------------------------------------->

<!-- Header ---------------------------------------->
<header>
	<!-- Navigation Bar ---------------------------->
	<nav>
		<div class="nav-wrapper light-blue darken-3">
			<a href="#" class="brand-logo">Logo</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			
		</div>
	</nav>
</header>
<!-- Header End ------------------------------------>

<!-- Main Content ---------------------------------->
<main>
	<!--- Section 1 Content ------------------------->
	<section>
		<div class="container">
			<!--- Carousel -------------------------------->
			<div class="row">
				<div class="col s12">
					<div id="front-end-carousel" class="carousel carousel-slider">
						<a href="#" class="carousel-item"><img src="<?php echo base_url('assets/images/slider1.jpg'); ?>"></a>
						<a href="#" class="carousel-item"><img src="<?php echo base_url('assets/images/slider2.jpg'); ?>"></a>
						<a href="#" class="carousel-item"><img src="<?php echo base_url('assets/images/slider3.jpg'); ?>"></a>
						<a href="#" class="carousel-item"><img src="<?php echo base_url('assets/images/slider4.jpg'); ?>"></a>
						<a href="#" class="carousel-item"><img src="<?php echo base_url('assets/images/slider5.jpg'); ?>"></a>
					</div>				
				</div>				
			</div>
            <!--- Carousel End ---------------------------->
			<div class="row">
				<div class="col s12">
					<h3>Philippines</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>					
				</div>				
			</div>			
		</div>
	</section>
	<!--- Section 1 Content End ----------------------->

    <!--- Section 2 Content --------------------------->
	<section>
		<div class="parallax-container">
			<!--- Background Image (Parallax) below first section of website ---------------------->
			<div class="parallax"><img src="<?php echo base_url('assets/images/parallax1.jpg'); ?>">
			</div>
			<div class="section white">
				<div class="row container">
					<h3 class="header">The pearl of the orient</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<div class="parallax-container">
				<!--- Background Image (Parallax) below first section of website ---------------------->
				<div class="parallax"><img src="<?php echo base_url('assets/images/parallax2.jpg'); ?>">
				</div>
			</div>
		</div>
	</section>
	<!--- Section 2 Content End ------------------------------>

	<!--- Section 3 - Testimonials --------------------------->
	<section>
		<div class="testimonials container">
			<div class="row">
				<div class="col s4 center-align">
					<img src="<?php echo base_url('assets/images/testimonials.jpg'); ?>" class="responsive-img circle"><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col s4 center-align">
					<img src="<?php echo base_url('assets/images/testimonials.jpg'); ?>" class="responsive-img circle"><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col s4 center-align">
					<img src="<?php echo base_url('assets/images/testimonials.jpg'); ?>" class="responsive-img circle"><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>				
			</div>			
		</div>
	</section>
	<!--- Section 3 - Testimonials End ----------------------->
</main>
<!-- Main Content End ------------------>

<!--- Footer --------------------------->
<footer id="front-end-footer" class="light-blue darken-3">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Footer Content</h5>
				<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
			</div>
			<!-- Links ---------------------->
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text">Links</h5>
				<ul>
					<li><a href="#!" class="grey-text text-lighten-3">Home</a></li>
					<li><a href="#!" class="grey-text text-lighten-3">Blog</a></li>
					<li><a href="#!" class="grey-text text-lighten-3">Contact</a></li>
					<li><a href="#!" class="grey-text text-lighten-3">About Us</a></li>
					<li><a href="#!" class="grey-text text-lighten-3">Privacy Policy</a></li>
				</ul>				
			</div>
			<!-- Links End ------------------->			
		</div>
	</div>
	<!-- Copyright ---------------------------->
	<div class="footer-copyright blue darken-3">
		<div class="container">
			© 2020 Copyright Text
			<a href="#!" class="grey-text text-lighten-4 right">More Links</a>
		</div>
	</div>
	<!-- Copyright End ------------------------>
</footer>
<!--- Footer End ------------------------------>