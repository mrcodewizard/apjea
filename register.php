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
					<h1 class="header-title">Register</h1>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><span>Register</span></li>
					</ul>
				</div>
			</div>
		</header>
		<div class="container-fluid jumbotron mb-0">
			<div class="container mt-4 mb-5">
				<div class="row">
					<div class="col-md-10 col-lg-10 mx-auto">
						<div class="outer-box bg-white">
							<h3 class="text-uppercase text-center">Register</h3>
							<hr>
							<form action="" method="post" class="register-form">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group input-group-success">
											<label for="" class="text-uppercase mt-3">Full Name:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													 <span class="input-group-text  bg-orange text-light">
													 	<i class="fa fa-user"></i>
													 </span>
												</div>
												<input type="text" class="form-control" placeholder="Enter Full Name">
												<span class="icon icon-success">
													<i class="fa fa-check-circle"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Designation:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													 <span class="input-group-text  bg-orange text-light">
													 	<i class="fa fa-user-secret"></i>
													 </span>
												</div>
												<select class="ui-dropdown">
													<option value="">Select Designation</option>
													<option value="">Chairman</option>
													<option value="">Copyist</option>
													<option value="">Clerk</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Province:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													 <span class="input-group-text  bg-orange text-light">
													 	<i class="fa fa-user-secret"></i>
													 </span>
												</div>
												<select class="ui-dropdown">
													<option value="">Select Province</option>
													<option value="">Punjab</option>
													<option value="">Sindh</option>
													<option value="">Khyber Pakhtunkhwa</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">District:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													 <span class="input-group-text  bg-orange text-light">
													 	<i class="fa fa-user-secret"></i>
													 </span>
												</div>
												<select class="ui-dropdown">
													<option value="">Select District</option>
													<option value="">Multan</option>
													<option value="">Khanewal</option>
													<option value="">Sahiwal</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Residence:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													 <span class="input-group-text  bg-orange text-light">
													 	<i class="fa fa-user-secret"></i>
													 </span>
												</div>
												<select class="ui-dropdown">
													<option value="">Select Area</option>
													<option value="">Khanewal</option>
													<option value="">Kabirwala</option>
													<option value="">Jahanian</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group input-group-error">
											<label for="" class="text-uppercase mt-3">Email:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													 <span class="input-group-text  bg-orange text-light">
													 	<i class="fa fa-user"></i>
													 </span>
												</div>
												<input type="text" class="form-control" placeholder="Enter Username or Email">
												<span class="icon icon-error">
													<i class="fa fa-times-circle"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Contact No:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													 <span class="input-group-text  bg-orange text-light">
													 	<i class="fa fa-user"></i>
													 </span>
												</div>
												<input type="text" class="form-control" placeholder="XXXX-XXXXXXX">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">CNIC:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													 <span class="input-group-text  bg-orange text-light">
													 	<i class="fa fa-user"></i>
													 </span>
												</div>
												<input type="text" class="form-control" placeholder="XXXXX-XXXXXXX-X">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Password:</label>
											<div class="input-group password-group">
												<div class="input-group-prepend">
													 <span class="input-group-text">
													 	<i class="fa fa-lock"></i>
													 </span>
												</div>
												<input type="password" class="form-control" placeholder="Enter Password">
												<span class="toggle-icon fa fa-eye"></span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="" class="text-uppercase mt-3">Confirm Password:
											</label>
											<div class="input-group password-group">
												<div class="input-group-prepend">
													 <span class="input-group-text">
													 	<i class="fa fa-lock"></i>
													 </span>
												</div>
												<input type="password" class="form-control" placeholder="Repeat Password">
												<span class="toggle-icon fa fa-eye"></span>
											</div>
										</div>
									</div>
								</div>

								<div class="text-center mt-3">
									<button class="btn btn-submit text-uppercase btn-round" type="submit">Register</button>
								</div>
							
								<div class="row form-footer">
									<div class="col-md-8">
										Already Registered<a href="register.php"> Sign In</a>
									</div>
									<div class="col-md-4 float-right">
										<a href="forgot-password.php">Forgot Password ?</a>
									</div>
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
	<script>
		$(".ui-dropdown").chosen();
	</script>
</body>
</html>

