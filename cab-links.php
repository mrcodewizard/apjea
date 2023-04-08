		
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
					<h1 class="header-title">Important Links</h1>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Cabinet</a></li>
						<li><span>Important Links</span></li>
					</ul>
				</div>
			</div>
		</header>
		
		<div class="main-content cabinet-content">
			<div class="container">
				<div class="row">
					<?php include "includes/cabinet-aside.php";?>
					<main class="col-md-9 cabinet-main">
						
						<div class="quick-links links-section">
							<div class="row link-row">
								<div class="col-md-12">
									<div class="quick-column">
										<h3>Some Important Links</h3>
										<ul class="row link-nav">
											<li class="col-md-6">
												<span><i class="fa fa-google"></i>
													<a href="#">Welcome to Art and Drawing</a>
											    </span>
											</li>
											<li class="col-md-6">
												<span><i class="fa fa-windows"></i>
													<a href="#">Microsoft Brings Revolution</a>
											    </span>
											</li>
											<li class="col-md-6">
												<span><i class="fa fa-android"></i>
													<a href="#">Andriod Apps are getting more popularity</a>
											    </span>
											</li>
											<li class="col-md-6">
												<span><i class="fa fa-google"></i>
													<a href="#">Welcome to Art and Drawing</a>
											    </span>
											</li>
											<li class="col-md-6">
												<span><i class="fa fa-windows"></i>
													<a href="#">Microsoft</a>
											    </span>
											</li>
											<li class="col-md-6">
												<span><i class="fa fa-android"></i>
													<a href="#">Andriod Apps are Famous</a>
											    </span>
											</li>
											<li class="col-md-6">
												<span><i class="fa fa-google"></i>
													<a href="#">Welcome to Art and Drawing</a>
											    </span>
											</li>
											<li class="col-md-6">
												<span><i class="fa fa-windows"></i>
													<a href="#">Microsoft</a>
											    </span>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Corporis inventore minus, voluptates ea quasi dignissimos voluptatum perspiciatis deleniti iure possimus nemo neque quaerat molestiae ullam voluptatibus, illum atque nostrum quae cupiditate obcaecati nisi temporibus et ad. Laborum eveniet fuga debitis aliquid cumque, enim voluptatum harum commodi dignissimos voluptate omnis eligendi, sed tempora dolorum aut itaque, cupiditate labore quod, esse error?</p>

							<div class="row link-row">
								<div class="col-md-6">
									<div class="quick-column">
										<h3>Popular Softwares</h3>
										<ul class="row link-nav">
											<li class="col-md-12">
												<span><i class="fa fa-google"></i>
													<a href="#">Google Apps</a>
											    </span>
											</li>
											<li class="col-md-12">
												<span><i class="fa fa-windows"></i>
													<a href="#">Microsoft Store</a>
											    </span>
											</li>
											<li class="col-md-12">
												<span><i class="fa fa-android"></i>
													<a href="#">Android Apps</a>
											    </span>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="quick-column">
										<h3>Famous Categories</h3>
										<ul class="row link-nav">
											<li class="col-md-12">
												<span><i class="fa fa-book"></i>
													<a href="#">Education & Books</a>
											    </span>
											</li>
											<li class="col-md-12">
												<span><i class="fa fa-windows"></i>
													<a href="#">Business & Manufacturing</a>
											    </span>
											</li>
											<li class="col-md-12">
												<span><i class="fa fa-paint-brush"></i>
													<a href="#">Art & Design</a>
											    </span>
											</li>
										</ul>
									</div>
								</div>
							</div>

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