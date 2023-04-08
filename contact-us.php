	<?php include "includes/head.php";?>
	<link rel="stylesheet" href="css/contact.css"/>
	<link rel="stylesheet" href="css/chosen.css"/>
</head>
<body>
	<div class="wrapper">
		<?php include "includes/topbar.php";?>
		<header class="title-header contact-header">
			<div class="container">
				<div class="header-text">
					<h1 class="header-title">Contact Us</h1>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><span>Contact Us</span></li>
					</ul>
				</div>
			</div>
		</header>
		
		<main class="main-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 contact-col">
						<h5>Our Address</h5>
						<h2>Visit Our Place</h2>
						<div class="item-list">
							<div class="contact-item row">
								<div class="contact-icon col-2">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="contact-detail col-10">
									<h3>Office Address</h3>
									<p>6281 Miana Esteions, LxemePort Ashlydeen, USA</p>
								</div>
							</div>
							<div class="contact-item row">
								<div class="contact-icon col-2">
									<i class="fa fa-phone"></i>
								</div>
								<div class="contact-detail col-10">
									<h3>Quick Contact</h3>
									<p>+92-323-778-4054</p>
									<p>+92-784-256-1024</p>
								</div>
							</div>
							<div class="contact-item row">
								<div class="contact-icon col-2">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="contact-detail col-10">
									<h3>Our Email</h3>
									<p>info@example.com</p>
									<p>admin@dgaps.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 bg-silver contact-col">
						<h5>Send Message</h5>
						<h2>Drop Us A Line</h2>
						<form action="" class="row contact-form">
							<div class="input-group col-md-6">
								<input type="text" placeholder="Name">
								<span class="icon-resp"><i class="fa fa-times"></i></span>
								<span class="error">Please Enter Your Name</span>
							</div>
							<div class="input-group col-md-6">
								<select placeholder="City" class="city-dropdown">
									<option> Select City </option>
									<option value="mlt">Multan</option>
									<option value="kwl">Khanewal</option>
									<option value="bwp">Bahawalpur</option>
									<option value="lhr">Lahore</option>
								</select>
							</div>
							<div class="input-group col-md-6">
								<input type="text" placeholder="Email">
								<span class="icon-resp"><i class="fa fa-check"></i></span>
								<span class="success">Email Format is Correct</span>
							</div>
							<div class="input-group col-md-6">
								<input type="text" placeholder="Phone Number">
								<span class="icon-resp"><i class="fa fa-check"></i></span>
								<span class="error">Please Enter Phone Number</span>
							</div>
							<div class="input-group col-md-12">
								<input type="text" placeholder="Subject">
							</div>
							<div class="input-group col-md-12">
								<textarea placeholder="Enter Message"></textarea>
							</div>
							<div class="input-group col-md-6 ml-auto">
								<button type="button" class="btn btn-contact">Send Message</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="container-fluid map-container">
				<div class="contact-strip">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-2 col-md-1 strip-icon">
								<i class="fa fa-bank"></i>
							</div>
							<div class="col-8 col-md-9 strip-detail">
								<h5>Our Skilled Team</h5>
								<h3>Why You Need the Top Lawyers in our Firm</h3>
							</div>
							<div class="col-2 col-md-2">
								<a href="mailto:admin@dgaps.com" class="button">Email Us</a>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3444.9653028047546!2d71.9157354150887!3d30.295049381791863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b554b068b1b21%3A0x7517d8adc887c625!2sDigital+Applications!5e0!3m2!1sen!2s!4v1540552186821" width="600" height="450" frameborder="0" style="border:0" allowfullscreen="">
					</iframe>
				</div>
			</div>

		</main>

		<?php include "includes/footer.php";?>
		<script src="js/chosen.js"></script>
		<script>
			$(".city-dropdown").chosen();
			$(".input-group input").keypress(function(){
				$(".icon-resp").show();
			});
			$(".btn-contact").click(function(){
				$(".error,.success").show();
			});
		</script>
	</div>
</body>
</html>