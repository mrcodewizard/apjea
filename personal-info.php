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
							<form action="#">
								<div class="row">
									<div class="col-md-8">
										<div class="message message-success">
											<span>User Added Successfully</span>
											<i class="close">&times;</i>
										</div>
										<div class="form-group input-group-success">
											<label>Full Name:</label>
											<input type="text" class="form-control">
											<span class="icon icon-success">
												<i class="fa fa-check-circle"></i>
											</span>
										</div>
										<div class="message message-error">
											<span>Invalid Data Format</span>
											<i class="close">&times;</i>
										</div>
										<div class="form-group input-group-error">
											<label>Father Name:</label>
											<input type="text" class="form-control">
											<span class="icon icon-error">
												<i class="fa fa-times-circle"></i>
											</span>
										</div>
										<div class="form-group">
											<label>CNIC:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="image-box">
											<label class="fileUpload">
												<i class="fa fa-camera"></i>
												<span>Upload Image</span>
												<input type="file" class="form-control" class="upload-file">
											</label>
										</div>
									</div>			
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Pay Personal No:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Date of Birth:</label>
											<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Designation:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Appointment Date:</label>
											<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Cell No:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>WhatsApp No:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Blood Group:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Email:</label>
											<input type="email" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Address:</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
	<script src="js/dashboard.js"></script>
</body>
</html>