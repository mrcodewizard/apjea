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
							<h5 class="text-uppercase">Nominee Information</h5>
							<form action="">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Nominee's Name:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Relation:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Father/Husband's Name:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>CNIC:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Contact No:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Email:</label>
											<input type="email" class="form-control">
										</div>
									</div>
									<div class="col-md-12">
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
	<script>
		$(".nt-dropdown-content").hide();
		$(".nt-dropdown span.toggle").click(function(){
			$(".nt-dropdown-content").slideToggle(500);
		});
	</script>
</body>
</html>