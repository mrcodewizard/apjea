		
	<?php include "includes/head.php";?>
	<link rel="stylesheet" href="css/owl.css"/>
	<link rel="stylesheet" href="css/cabinet.css"/>
</head>
<body>
	<div class="wrapper">
		<?php include "includes/topbar.php";?>
		<header class="title-header contact-header">
			<div class="container">
				<div class="header-text">
					<h1 class="header-title">Cabinets</h1>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><span>Cabinets</span></li>
					</ul>
				</div>
			</div>
		</header>
		
		<div class="main-content cabinet-content">
			<div class="container">
				<div class="row">
					<?php include "includes/cabinet-aside.php";?>
					<main class="col-md-9 cabinet-main head-main">
						<div id="team-head" class="cabinet-column">
							<h3 class="cab-top">Team Head</h3>
							<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere quod nihil provident animi aliquid aliquam pariatur exercitationem. Cupiditate, quidem, eaque.</p>
							<div class="row">
								<div class="col-md-12">
									<div class="head-column">
										<h3>About</h3>
										<div class="row">
											<div class="col-md-5 image-col">
												<img src="images/member-1.jpg" class="img-fluid" alt="head-image">
											</div>
											<div class="col-md-7 text-col">
												<h4>Jeremy Rose</h4>
												<p class="text-green">Session Judge CA</p>
												<ul class="head-nav">
													<li><i class="fa fa-envelope"></i> 
														<span>Email: </span> admin@dgaps.com</li>
													<li><i class="fa fa-globe"></i>
														<span>Website: </span> http://dgaps.com</li>
													<li><i class="fa fa-clock-o"></i>
														<span>Experience: </span> 17 Years</li>
													<li> <i class="fa fa-phone"></i> 
														<span>Contact: </span> +92 300 1234 786</li>
													<li> <i class="fa fa-map-marker"></i> 
														<span>Address: </span> Block #13 Bhutta Chowk Khanewal</li>
												</ul>
												<h5 class="social-head">Social Platform</h5>
												<ul class="social-nav">
													<li><a href="#"><i class="fa fa-facebook"></i>
													</a></li>
													<li><a href="#"><i class="fa fa-twitter"></i>
													</a></li>
													<li><a href="#"><i class="fa fa-instagram"></i>
													</a></li>
													<li><a href="#"><i class="fa fa-skype"></i>
													</a></li>
												</ul>



											</div>
										</div>
									</div>
									<div class="head-column">
										<h3>Professional Summary</h3>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eveniet doloribus exercitationem veniam voluptates tempora cum impedit odio, voluptate facere officiis laudantium qui modi eligendi rem provident porro, explicabo repudiandae!</p>
									</div>

									<!-- <div class="head-column">
										<h3>Professional Expereince</h3>
										<div class="row">
											<div class="col-md-6 bars-column">
												<div class="progress">
													<div class="progress-text">
														<span class="fl-left">Consulting</span>
														<span class="fl-right">85%</span>
													</div>
													<div class="line">
														<span class="inner" style="width:85%" data-width="85%"></span>
													</div>
												</div>
												<div class="progress">
													<div class="progress-text">
														<span class="fl-left">Client Satisafaction</span>
														<span class="fl-right">92%</span>
													</div>
													<div class="line">
														<span class="inner" style="width:92%"></span>
													</div>
												</div>
												<div class="progress">
													<div class="progress-text">
														<span class="fl-left">Excellent Services</span>
														<span class="fl-right">95%</span>
													</div>
													<div class="line">
														<span class="inner" style="width:95%"></span>
													</div>
												</div>
												<div class="progress">
													<div class="progress-text">
														<span class="fl-left">Benefits Received</span>
														<span class="fl-right">90%</span>
													</div>
													<div class="line">
														<span class="inner" style="width:90%"></span>
													</div>
												</div>
												<div class="progress">
													<div class="progress-text">
														<span class="fl-left">Cases Won</span>
														<span class="fl-right">95%</span>
													</div>
													<div class="line">
														<span class="inner" style="width:95%"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<ul></ul>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div> <!-- team head end -->						
						<!-- <hr class="hr-green"/> -->
					</main>
				</div>
			</div>
		</div>
		<?php include "includes/footer.php";?>
	</div>
	<script>
		$(window).on("scroll",function(){
			if($(window).scrollTop() >600){
				$(".cabinet-content .inner-column").addClass("fixed-column");
			}
			else{
				$(".cabinet-content .inner-column").removeClass("fixed-column");
			}
			if($(window).scrollTop() > $(".cabinet-content").height()){
				$(".cabinet-content .inner-column").removeClass("fixed-column");
			}
		});
	</script>
</body>
</html>