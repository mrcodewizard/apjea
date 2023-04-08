		
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

						<div id="history" class="cabinet-column">
							<h3 class="cab-top">History</h3>
							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.</p>
							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.Lorem ipsum</p>

							<div class="pink-box">
								<h3 class="text-center">What We do the Best
									<span class="decor-line">
							        	<em class="star">
							        		<i class="fa fa-star"></i>
							        	</em>
							      	</span>
								</h3>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum adipisci, natus quisquam nam commodi repudiandae debitis assumenda sequi recusandae molestias quibusdam iure, iste ratione dignissimos magni amet nesciunt. Quod sit recusandae, odit suscipit laborum, illum. Saepe explicabo, repellat accusantium esse enim maxime ipsam delectus numquam incidunt quos doloremque praesentium consectetur.</p>
							</div>

							<ul class="history-nav">
								<li>
									<span class="icon"><i class="fa fa-gavel"></i></span>
									<div class="h-column">
										<h4>10 Aug 2012 </h4>
										<h3 class="title">Founded in 1990</h3>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui incidunt doloremque assumenda nam autem voluptate? Alias necessitatibus aliquid officia, porro?</p>
									</div>
								</li>
								<li>
									<span class="icon"><i class="fa fa-handshake-o"></i></span>
									<div class="h-column">
										<h4>10 Aug 2012 – TO – 2020.</h4>
										<h3 class="title">Establish Relation with ICJ</h3>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui incidunt doloremque assumenda nam autem voluptate? Alias necessitatibus aliquid officia, porro?</p>
									</div>
								</li>
								<li>
									<span class="icon"><i class="fa fa-book"></i></span>
									<div class="h-column">
										<h4>10 Aug 2012 – TO – CONT.</h4>
										<h3 class="title">Maintain Constuttional Amenedments</h3>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui incidunt doloremque assumenda nam autem voluptate? Alias necessitatibus aliquid officia, porro?</p>
									</div>
								</li>
								<li>
									<span class="icon"><i class="fa fa-thumbs-up"></i></span>
									<div class="h-column">
										<h4>10 Aug 2012 – TO – CONT.</h4>
										<h3 class="title">Become a Supreme Power in Pakistan</h3>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui incidunt doloremque assumenda nam autem voluptate? Alias necessitatibus aliquid officia, porro?</p>
									</div>
								</li>
							</ul>
							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.Lorem ipsum</p>

							<div class="pink-box">
								<h3 class="text-center">Highlights
									<span class="decor-line">
							        	<em class="star">
							        		<i class="fa fa-star"></i>
							        	</em>
							      	</span>
								</h3>
								<div class="row highlight-row">
									<div class="col-md-4">
										<img src="images/event-1.jpg" class="img-fluid" alt="event-image">
									</div>
									<div class="col-md-4">
										<img src="images/event-2.jpg" class="img-fluid" alt="event-image">
									</div>
									<div class="col-md-4">
										<img src="images/event-3.jpg" class="img-fluid" alt="event-image">
									</div>
									<div class="col-md-4">
										<img src="images/event-4.jpg" class="img-fluid" alt="event-image">
									</div>
									<div class="col-md-4">
										<img src="images/event-5.jpg" class="img-fluid" alt="event-image">
									</div>
									<div class="col-md-4">
										<img src="images/event-6.jpg" class="img-fluid" alt="event-image">
									</div>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Ipsum veniam recusandae consectetur adipisci, accusantium, dignissimos omnis quo reiciendis dolore a excepturi eum aspernatur, alias magnam nisi mollitia sunt corrupti ut! Sapiente quisquam enim ducimus nulla qui dolore delectus rem suscipit consectetur beatae totam, nam eum iure, cupiditate fugit quo eligendi.</p>
						</div> <!-- history end -->
						
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