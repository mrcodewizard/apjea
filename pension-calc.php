	<?php include "includes/head.php";?>
	<link rel="stylesheet" href="css/form.css"/>
	<link rel="stylesheet" href="css/chosen.css"/>
</head>
<body>
	<div class="wrapper">
		<?php include "includes/topbar.php";?>
		<header class="title-header main-header">
			<div class="container">
				<div class="header-text">
					<h1 class="header-title">Pension Calculator</h1>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><span>Pension Calculator</span></li>
					</ul>
				</div>
			</div>
		</header>
		<div class="container-fluid jumbotron mb-0">
			<div class="container mt-4 mb-5">
				<div class="row">
					<div class="col-md-12 col-lg-12 mx-auto">
						<div class="outer-box bg-white" style="background-image: url(images/calculation.webp);">
							<h3 class="text-uppercase text-center">Pension Calcultor</h3>
							<hr>
							<form action="" method="post" class="pension-form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group input-group-success">
											<label for="" class="text-uppercase mt-3">Full Name:</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Enter Full Name">
												<span class="icon icon-success">
													<i class="fa fa-check-circle"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group input-group-success">
											<label for="" class="text-uppercase mt-3">Enter Your City:
											</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Enter Full Name">
												<span class="icon icon-success">
													<i class="fa fa-check-circle"></i>
												</span>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group input-group-success">
											<label for="" class="text-uppercase mt-3">Enter Your Organization:</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Enter Full Name">
												<span class="icon icon-success">
													<i class="fa fa-check-circle"></i>
												</span>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Choose Designation:</label>
											<div class="input-group">
												<select class="ui-dropdown">
													<option value="">Select Designation</option>
													<option value="">Auditor</option>
													<option value="">Chairman</option>
													<option value="">Director</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Pension Type:
											</label>
											<div class="input-group">
												<select class="ui-dropdown">
													<option value="">Select Type</option>
													<option value="">Chairman</option>
													<option value="">Copyist</option>
													<option value="">Clerk</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="" class="text-uppercase mt-3">Pay Scale:
													</label>
													<div class="input-group">
														<select class="ui-dropdown">
															<option value="">Select Scale</option>
															<option value="">BS-09</option>
															<option value="">BS-10</option>
															<option value="">BS-14</option>
														</select>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="" class="text-uppercase mt-3">Pay:
													</label>
													<div class="input-group">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											
										</div>
										
									</div>
									<div class="col-md-6">
										<label for="" class="text-green ftw-600">Non Qualify Service (Optional)</label>
										<div class="row">
											<div class="col-md-4 form-group">
												<div class="input-group">
													<select class="form-control">
														<option value="">Year</option>
														<option value="">2020</option>
														<option value="">2019</option>
														<option value="">2018</option>
													</select>
												</div>
											</div>
											<div class="col-md-4 form-group">
												<div class="input-group">
													<select class="form-control">
														<option value="">Month</option>
														<option value="">2020</option>
														<option value="">2019</option>
														<option value="">2018</option>
													</select>
												</div>
											</div>
											<div class="col-md-4 form-group">
												<div class="input-group">
													<select class="form-control">
														<option value="">Date</option>
														<option value="">2020</option>
														<option value="">2019</option>
														<option value="">2018</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Date of Birth
											</label>
											<div class="input-group">
												<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Date of Appointment
											</label>
											<div class="input-group">
												<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Date of Retirement
											</label>
											<div class="input-group">
												<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
											</div>
										</div>
									</div>
									
								</div>

								<div class="text-center mt-3">
									<button class="btn btn-submit text-uppercase btn-round" type="submit">
										Calculate
									</button>
								</div>
							</form>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "includes/footer.php"; ?>
	<script>
		var button = document.getElementsByClassName("toggle-icon")[0];
		button.onclick = function(e){
			var parent     = button.parentNode;
			var type = parent.children[1].type;
			if(type == "password"){
				parent.children[1].type = "text";
			}
			else{
				parent.children[1].type = "password";
			}
			if(button.classList.contains("fa-eye")){
				button.classList.add("fa-eye-slash");
				button.classList.remove("fa-eye");
			}
			else{
				button.classList.add("fa-eye");
				button.classList.remove("fa-eye-slash");
			}
		}

		var conf = document.getElementsByClassName("toggle-icon")[1];
		conf.onclick = function(e){
			var parent     = conf.parentNode;
			var type 	   = parent.children[1].type;
			if(type == "password"){
				parent.children[1].type = "text";
			}
			else{
				parent.children[1].type = "password";
			}
			if(conf.classList.contains("fa-eye")){
				conf.classList.add("fa-eye-slash");
				conf.classList.remove("fa-eye");
			}
			else{
				conf.classList.add("fa-eye");
				conf.classList.remove("fa-eye-slash");
			}
		}
	</script>
	<script src="js/chosen.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
	<script>
		$(".ui-dropdown").chosen();
		$("input[type='date']").on("change", function() {
		    this.setAttribute(
		        "data-date",
		        moment(this.value, "YYYY-MM-DD")
		        .format( this.getAttribute("data-date-format") )
		    )
		}).trigger("change");
	</script>
</body>
</html>

