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
							<h5 class="text-uppercase">ADD NEW FUNDS</h5>
							<form action="" class="row funds-row">
								<div class="col-md-5">
									<div class="image-col">
										<img src="images/fund-2.jpg" class="img-fluid" alt="lock-image">
									</div>
								</div>
								<div class="col-md-7">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Sr.No:</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group">
												<label>Date:</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Select User:</label>
										<select name="" class="form-control">
											<option>Choose User</option>
											<option>Alex</option>
											<option>John</option>
										</select>
									</div>
								
									<div class="form-group">
										<label>Amount:</label>
										<input type="text" placeholder="Amount in Rupees" class="form-control">
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Through:</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Funds For:</label>
												<select name="" class="form-control">
													<option>Choose Option</option>
													<option>DJWS</option>
													<option>APJEA</option>
												</select>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Funds Period:</label>
										<select name="" class="form-control">
											<option>Choose Option</option>
											<option>First</option>
											<option>Second</option>
										</select>
									</div>

									<div class="form-group">
										<label>Add Comments:</label>
										<textarea class="form-control" placeholder="Write Comments"></textarea>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group button-group">
										<button type="submit" class="btn btn-submit"><i class="fa fa-check-circle"></i>
										Submit</button>
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