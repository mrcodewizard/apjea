	<?php include "includes/head.php";?>
	<link rel="stylesheet" href="css/dashboard.css"/>
	<link rel="stylesheet" href="css/owl.css">
</head>
<body>
	<div class="wrapper">
		<?php include "includes/dash-top-nav.php";?>
		<header class="title-header main-header">
			<div class="container">
				<div class="header-text">
					<h1 class="header-title">Dashboard</h1>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><span>User Dashboard</span></li>
					</ul>
				</div>
			</div>
		</header>

		<main class="dashboard-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<?php include "includes/dash-aside.php";?>
					</div>
					<div class="col-md-9">
						<div class="main-column">
							<h5 class="text-uppercase">Account Setting</h5>
							<form action="" class="row password-row">
								<div class="col-md-4">
									<img src="images/lock.png" class="img-fluid" alt="lock-image">
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label>Old Password:</label>
										<input type="text" class="form-control">
									</div>

									<div class="icon-group">
										<label>Select Old Security Image</label>
										<div class="icon-list">
											<label class="active">
												<i class="fa fa-graduation-cap"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-book"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-gavel"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-user"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-mobile"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-bell"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-star"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-bicycle"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-camera"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-apple"></i>
												<input type="radio" name="rd-os">
											</label>
										</div>
									</div>
								
									<div class="form-group">
										<label>New Passowrd:</label>
										<input type="text" class="form-control">
									</div>

									<div class="icon-group">
										<label>Choose New Security Image</label>
										<div class="icon-list">
											<label>
												<i class="fa fa-graduation-cap"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-book"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-gavel"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-user"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-mobile"></i>
												<input type="radio" name="rd-os">
											</label>
											<label class="active">
												<i class="fa fa-bell"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-star"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-bicycle"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-camera"></i>
												<input type="radio" name="rd-os">
											</label>
											<label>
												<i class="fa fa-apple"></i>
												<input type="radio" name="rd-os">
											</label>
										</div>
									</div>
								
									<div class="form-group">
										<label>Confirm Password:</label>
										<input type="text" class="form-control">
									</div>
		
									<div class="form-group">
										<button type="submit" class="btn btn-submit"><i class="fa fa-check-circle"></i>
										Submit</button>
									</div>
								  </div>
								</div>
							</div>
						</form>
								
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php include "includes/footer.php";?>
		<script src="js/dashboard.js"></script>
	</div>
</body>
</html>