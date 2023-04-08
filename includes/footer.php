		<footer class="crt-footer">
			<div class="container footer-top">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<h3 class="title-head">Contact Info</h3>
						<p>We are always available for you to pass & get back on the right track.</p>

						<div class="footer-contact">
							<div class="contact-item row">
								<div class="contact-icon col-2">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="contact-detail col-10">
									<p>Block # 13,Bhutta Chowk near Shabbir stadium Khanewal</p>
								</div>
							</div>

							<div class="contact-item row">
								<div class="contact-icon col-2">
									<i class="fa fa-comment-o"></i>
								</div>
								<div class="contact-detail col-10">
									<p>Tell Us The Reason For Your Query</p>
									<a href="mailto:admin@dgaps.com">admin@dgaps.com</a>
								</div>
							</div>

							<div class="contact-item row">
								<div class="contact-icon col-2">
									<i class="fa fa-clock-o"></i>
								</div>
								<div class="contact-detail col-10">
									<p>Monday To Satarday : 8am - 6pm.</p>
									<p>Sunday CLOSED</p>
								</div>
							</div>

							<div class="contact-item item-lg row">
								<div class="contact-icon col-3">
									<i class="fa fa-headphones"></i>
								</div>
								<div class="contact-detail col-9">
									<h3>+92-343-123-4786</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 form-column">
						<form action="">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Mobile Number">
							</div>
							<div class="form-group">
								<textarea class="form-control" class="form-control" placeholder="Enter Message"></textarea>
							</div>
							<div class="button-group">
								<button class="btn btn-block" type="submit">Submit Request</button>
							</div>
						</form>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="row">
							<div class="col-md-6 col-lg-12">
								<h3 class="title-head">Quick Links</h3>
								<div class="footer-links row">
									<ul class="col-sm-6">
										<li><a href="#">Make Appointments</a></li>
										<li><a href="#">Corporate Law</a></li>
										<li><a href="terms.php">Terms & Conditions</a></li>
										<li><a href="faqs.php">FAQs</a></li>
									</ul>
									<ul class="col-sm-6">
										<li><a href="privacy.php">Privacy Policy</a></li>
										<li><a href="#">Advertisements</a></li>
										<li><a href="#">Criminal Law</a></li>
										<li><a href="#">Cabinets</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6 col-lg-12">
								<div class="newletter-box">
									<h3 class="title-head">Newsletter</h3>
									<p>Subscribe to our newsletter to receive latest news & notification on our services.</p>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Email Address">
										<button type="submit" class="btn-subscribe">
											<i class="fa fa-paper-plane"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr class="footer-hr">

			<div class="container footer-bottom">
				<div class="row bottom-row">
					<div class="col-md-6 rights-column">
						<p>Copyright © 2020 All Rights Reserved By APJEA</p>
						<p>Design & Developed By: <a href="https://dgaps.com">Digital Applications</a></p>
					</div>
					<div class="col-md-6 social-flex">
						<ul class="footer-social">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<!-- Move to Top -->
		<div id="scroll-div">
			<button type="button"><i class="fa fa-long-arrow-up"></i></button>
		</div>

		<!-- Footer Scripts -->
		<script src="js/jquery.js"></script>
		<script>
			$(document).ready(function(){
				$("#scroll-div button").click(function(){
					$("html").animate({ scrollTop: 0 }, "slow");
				})
			});
			$(".main-menu li.logo").hide();
			$(window).on("scroll",function(){
				if($(window).scrollTop()>160 && $(window).width()>992){
					$(".nav-container").addClass("fixed-top");
					$(".main-menu").addClass("container");
					$(".main-menu").css({"margin":"0px auto"});
					$(".main-menu li.logo").show();
				}
				else{
					$(".nav-container").removeClass("fixed-top");
					$(".main-menu").removeClass("container");
					$(".main-menu").css({"margin":"0px"});
					$(".main-menu").find("li.logo").hide();
				}

				if($(window).scrollTop()<=300){
					$("#scroll-div").hide();
				}
				else{
					$("#scroll-div").show();
				}
			});

			$("ul.top-loc li a").click(function(){
				$(".loc-dropdown").slideToggle();
				$("ul.top-loc li >a:first-child").text($(this).text());
			});

			$(".btn-toggle").click(function(){
				$("ul.main-menu").slideToggle();
			});
			$(".main-menu >li.dropdown").hover(function(){
				$(this).find(".dropdown-content").addClass("fade");
			},function(){
				$(this).find(".dropdown-content").removeClass("fade");
			});
		</script>	

		