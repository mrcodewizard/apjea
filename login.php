	<?php include "includes/head.php";?>
	<link rel="stylesheet" href="css/form.css"/>
</head>
<body>
	<div class="wrapper">
		<?php include "includes/topbar.php";?>
		<header class="title-header main-header">
			<div class="container">
				<div class="header-text">
					<h1 class="header-title">Login</h1>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><span>Login</span></li>
					</ul>
				</div>
			</div>
		</header>
		<div class="container-fluid jumbotron mb-0">
			<div class="container mt-4 mb-5">
				<div class="row">
					<div class="col-md-8 col-lg-6 mx-auto">
						<div class="outer-box bg-white">
							<h3 class="text-uppercase text-center">Login</h3>
							<hr>
							<form action="user-home.php" method="post">
								<div class="form-group">
									<label for="" class="text-uppercase mt-3">CNIC:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											 <span class="input-group-text">
											 	<i class="fa fa-credit-card"></i>
											 </span>
										</div>
										<input type="text" class="form-control" placeholder="XXXXX-XXXXXXX-X">
									</div>
								</div>
								
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

								<div class="text-center mt-3">
									<button class="btn btn-submit text-uppercase btn-round" type="submit">Login</button>
								</div>
							
								<div class="row form-footer">
									<div class="col-md-8">
										Don't have account<a href="register.php"> Sign Up</a>
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
		var button = document.querySelector(".toggle-icon");
		button.onclick = function(e){
			var parent     = document.querySelector(".password-group");
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
	</script>
</body>
</html>

