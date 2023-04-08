		
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
					<main class="col-md-9 cabinet-main">
						<div id="overview" class="cabinet-column">
							<h3 class="cab-top">Overview</h3>
							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.</p>
							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.Lorem ipsum</p>



							<div class="row colored-row mr-0">
								<div class="col-md-6 pr-0">
									<div class="intro-box bg-dark box-1">
										<h3 class="title">More Than 100 Year of <span>Public Trust</span></h3>
										<ul>
											<li><i class="fa fa-check-square"></i> Easiest System
											</li>
											<li><i class="fa fa-check-square"></i> Cooperative Staff
											</li>
											<li><i class="fa fa-check-square"></i> Services For You
											</li>
											<li><i class="fa fa-check-square"></i> Easiest System
											</li>
											<li><i class="fa fa-check-square"></i> Cooperative Staff
											</li>
											<li><i class="fa fa-check-square"></i> Services For You
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 bg-green pl-0 pr-15">
									<div class="small-box">
										<div class="row">
											<div class="col-sm-3 icon">
												<i class="fa fa-group"></i>
											</div>
											<h4 class="col-sm-9 small-head">Experienced Team</h4>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ab facere beatae expedita a laborum rerum doloribus</p>
									</div>
									<div class="small-box">
										<div class="row">
											<div class="col-sm-3 icon">
												<i class="fa fa-fax"></i>
											</div>
											<h4 class="col-sm-9 small-head">Free Consultation</h4>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ab facere beatae expedita a laborum rerum doloribus</p>
									</div>
								</div>
							</div>

							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.Lorem ipsum</p>

							<blockquote class="green-note">Donec ornare, est sed tincidunt placerat, sem mi suscipit mi, at varius enim Mauris ienim id purus ort. Aene auat riss. Proin viverra.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							<cite class="text-green">--Bertrand Russel</cite></blockquote>

							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.</p>

							<ul class="bottom-nav">
								<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
								<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
								<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
								<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
								<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
								<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
							</ul>


							<!-- <div class="about-feature row">
								<div class="col-md-6 row">
									<div class="col-md-3">
									   <img src="images/icon-one.png" class="img-fluid" alt="about-icon">
									</div>
									<div class="col-md-9">
										<h4>100% Success Rate</h4>
									</div>
								</div>
								
								<div class="col-md-6 row">
									<div class="col-md-3">
									   <img src="images/icon-two.png" class="img-fluid" alt="about-icon">
									</div>
									<div class="col-md-9">
										<h4>Highly Recommend</h4>
									</div>
								</div>
								<div class="col-md-6 row">
									<div class="col-md-3">
									   <img src="images/icon-three.png" class="img-fluid" alt="about-icon">
									</div>
									<div class="col-md-9">
										<h4>Expert Legal Services</h4>
									</div>
								</div>
								<div class="col-md-6 row">
									<div class="col-md-3">
									   <img src="images/icon-four.png" class="img-fluid" alt="about-icon">
									</div>
									<div class="col-md-9">
										<h4>Expert Attorneys</h4>
									</div>
								</div>
							</div> -->
						</div> <!-- overview end -->
						<!-- <hr class="hr-green"/> -->
					</main>
				</div>
			</div>
		</div>
		<?php include "includes/footer.php";?>
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
	</div>
</body>
</html>