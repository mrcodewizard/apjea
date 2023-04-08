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
							<h5 class="text-uppercase">Family Information</h5>
							<form action="" class="family-form">
								<div class="row custom-row">
									<div class="col-md-10 row">
										<div class="col-sm-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Member Name">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<select name="">
													<option value="">Select Relation</option>
													<option value="">Father</option>
													<option value="">Mother</option>
													<option value="">Child</option>
												</select>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Age">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<select name="">
													<option value="">Marital Status</option>
													<option value="">Married</option>
													<option value="">Unmarried</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<span class="icon-plus" title="Add Row"><i class="fa fa-plus-circle"></i></span>
											<span class="icon-delete" title="Delete Row"><i class="fa fa-trash"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3" style="margin-left:auto;">
										<div class="form-group">
											<button type="submit" class="btn btn-submit"><i class="fa fa-check-circle"></i>
											Submit</button>
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
	</div>
	<script src="js/dashboard.js"></script>
</body>
</html>