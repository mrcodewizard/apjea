		
	<?php include "includes/head.php";?>
	<link rel="stylesheet" href="css/owl.css"/>
	<link rel="stylesheet" href="css/cabinet.css"/>
	<link rel="stylesheet" href="css/chosen.css"/>
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
					<main class="col-md-12 cabinet-main">
						<div id="overview" class="cabinet-column">
							<h3 class="cab-top">APJEA Cabinets</h3>
							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.</p>
							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.Lorem ipsum</p>

							<blockquote class="green-note">Donec ornare, est sed tincidunt placerat, sem mi suscipit mi, at varius enim Mauris ienim id purus ort. Aene auat riss. Proin viverra.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							<cite class="text-green">--Bertrand Russel</cite></blockquote>


							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.Lorem ipsum</p>

							
							<h3 class="text-dark text-uppercase">Choose Cabinets</h3>
							<div class="row colored-row cabinet-options mr-0" style="margin:0">
								<div class="col-md-6 bg-dark choose-item pr-0" data-href="cab-pro">
									<div class="small-box">
										<div class="row">
											<div class="col-sm-3 icon">
												<i class="fa fa-group"></i>
											</div>
											<h4 class="col-sm-9 small-head">Provincial Cabinet</h4>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ab facere beatae expedita a laborum rerum doloribus</p>
									</div>
								</div>
								<div class="col-md-6 bg-green choose-item pl-0 pr-15"
								data-href="cab-dist">
									<div class="small-box">
										<div class="row">
											<div class="col-sm-3 icon">
												<i class="fa fa-fax"></i>
											</div>
											<h4 class="col-sm-9 small-head">District Cabinet</h4>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ab facere beatae expedita a laborum rerum doloribus</p>
									</div>
								</div>
							</div>
							<div class="row cabinet-toggle province-cabinet" id="cab-pro">
								<div class="col-md-4">
									<div class="cabinet-item">
										<img src="images/01-cabinet.png" alt="court-logo">
										<a href="cab-overview.php">Punjab Cabinet</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="cabinet-item">
										<img src="images/02-cabinet.png" alt="court-logo">
										<a href="cab-overview.php">Sindh Cabinet</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="cabinet-item">
										<img src="images/03-cabinet.png" alt="court-logo">
										<a href="cab-overview.php">Balochistan Cabinet</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="cabinet-item">
										<img src="images/04-cabinet.png" alt="court-logo">
										<a href="cab-overview.php">Khyber Pakhtunkwa Cabinet</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="cabinet-item">
										<img src="images/05-cabinet.png" alt="court-logo">
										<a href="cab-overview.php">Gilgit Baltistan Cabinet</a>
									</div>
								</div>
							</div>

							<div class="cabinet-toggle district-cabinet" id="cab-dist">
								<form action="cab-overview.php" class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label for="">Choose District</label>
											<select class="dropdown-list">
												<option value="">Multan</option>
												<option value="">Khanewal</option>
												<option value="">Bahawalpur</option>
											</select>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<label for="">Choose Tehsil</label>
											<select class="dropdown-list">
												<option value="">Kabirwala</option>
												<option value="">Jahanian</option>
												<option value="">Mian Channu</option>
											</select>
										</div>
									</div>
									<div class="col-md-2">
										<button class="btn btn-search">Go</button>
									</div>
								</form>
							</div>
							
							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Obcaecati optio quam animi, velit, deleniti quibusdam ab fugiat cumque dicta quo veniam consequuntur sit, totam exercitationem possimus? Dolores distinctio nam, fugiat.</p>

						</div> <!-- overview end -->
						<!-- <hr class="hr-green"/> -->
					</main>
				</div>
			</div>
		</div>
		<?php include "includes/footer.php";?>
		<script src="js/chosen.js"></script>
		<script>
			$(".dropdown-list").chosen();
		</script>
		<script>
			$(".province-cabinet,.district-cabinet").hide();
			$(".cabinet-options .choose-item").click(function(){
				$(".cabinet-toggle").hide();
				$(".cabinet-options .choose-item").css({"background-color":"#259c17"});
				selector = $(this);
				var href = $(this).attr("data-href");
				$(".cabinet-toggle").each(function(el){
					var itemId = $(this).attr("id");
					if(href == itemId){
						$(this).show();
						selector.css({"background-color":"#242c42"});
					}
					else{
						$(this).hide();
					}
				});
			});

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
		$(".dropdown-list").chosen();
		</script>
	</div>
</body>
</html>