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
							<h5 class="text-uppercase">Claim Form</h5>
							<form action="#">
								<div class="row">
									<div class="col-md-3">
										<div class="item-col" data-href="form1">
											<div class="item-image">
												<img src="images/menu-1.jpg" class="img-fluid" alt="marriage-image">
											</div>
											<div class="item-text">
												<h3>Marriage</h3>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="item-col" data-href="form2">
											<div class="item-image">
												<img src="images/menu-2.jpg" class="img-fluid" alt="marriage-image">
											</div>
											<div class="item-text">
												<h3>Umrah</h3>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="item-col" data-href="form3">
											<div class="item-image">
												<img src="images/menu-3.png" class="img-fluid" alt="marriage-image">
											</div>
											<div class="item-text">
												<h3>Baby Birth</h3>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="item-col" data-href="form4">
											<div class="item-image">
												<img src="images/menu-4.png" class="img-fluid" alt="marriage-image">
											</div>
											<div class="item-text">
												<h3>Retirement</h3>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="item-col" data-href="form5">
											<div class="item-image">
												<img src="images/menu-5.jpg" class="img-fluid" alt="marriage-image">
											</div>
											<div class="item-text">
												<h3>Death</h3>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="item-col" data-href="form6">
											<div class="item-image">
												<img src="images/menu-6.png" class="img-fluid" alt="marriage-image">
											</div>
											<div class="item-text">
												<h3>Accident</h3>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="item-col" data-href="form7">
											<div class="item-image">
												<img src="images/menu-7.jpg" class="img-fluid" alt="marriage-image">
											</div>
											<div class="item-text">
												<h3>Medical</h3>
											</div>
										</div>
									</div>
								</div>

								<div class="row claim-row" id="form1">
									<div class="col-md-5">
										<div class="icon-box">
											<img src="images/menu-1.jpg" class="img-fluid" alt="marriage-image">
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group input-group-success">
											<label>Full Name:</label>
											<input type="text" class="form-control" placeholder="Enter Son/Daughter's Name">
											<span class="icon icon-success">
												<i class="fa fa-check-circle"></i>
											</span>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>CNIC:</label>
													<input type="text" class="form-control" placeholder="XXXXX-XXXXXXX-X">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group input-group-error">
													<label>Relation:</label>
													<input type="text" class="form-control" placeholder="Relation with Govt. Servant">
													<span class="icon icon-error">
														<i class="fa fa-times-circle"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>Husband/Wife Name:</label>
											<input type="text" class="form-control" placeholder="Enter Husband or Wife Name">
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Date of Marriage:</label>
													<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group form-group">
													<label>Upload Copy of CNIC:</label>
													<div class="custom-file">
													    <input type="file" name="cnic_copy" class="custom-file-input" id="customFile">
													    <label class="custom-file-label" for="customFile">Choose file</label>
													</div>	
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group form-group">
													<label>Upload Copy of Nikah Nama:</label>
													<div class="custom-file">
													    <input type="file" name="cnic_copy" class="custom-file-input" id="customFile">
													    <label class="custom-file-label" for="customFile">Choose file</label>
													</div>	
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<button type="submit" class="btn btn-submit"><i class="fa fa-check-circle"></i>
													Submit</button>
												</div>
											</div>
										</div>

									</div>
								</div>

								<div class="row claim-row" id="form2">
									<div class="col-md-5">
										<img src="images/menu-2.jpg" class="img-fluid" alt="umrah-image">
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<label>Application Date:</label>
											<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
										</div>
									
										<div class="form-group">
											<label>CNIC:</label>
											<input type="text" class="form-control" placeholder="Enter CNIC in XXXXX-XXXXXXX-X">
										</div>
									
										<div class="form-group">
											<label>Contact No.</label>
											<input type="text" class="form-control" placeholder="Contact Number is XXXX-XXXXXXX">
										</div>
										
										<div class="input-group form-group">
											<label>Upload Copy of CNIC:</label>
											<div class="custom-file">
											    <input type="file" name="cnic_copy" class="custom-file-input" id="customFile">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											</div>	
										</div>
										
										<div class="form-group">
											<button type="submit" class="btn btn-submit"><i class="fa fa-check-circle"></i>
											Submit</button>
										</div>
									</div>
								</div>

								<div class="row claim-row" id="form3">
									<div class="col-md-5">
										<img src="images/menu-3.png" class="img-fluid" alt="umrah-image">
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<label>Child Date of Birth:</label>
											<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
										</div>
									
										<div class="form-group">
											<label>Place of Birth:</label>
											<input type="text" class="form-control">
										</div>
									
										<div class="form-group">
											<label>Baby's Mother Name</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="input-group form-group">
											<label>Upload Birth Certificate Copy:</label>
											<div class="custom-file">
											    <input type="file" name="cnic_copy" class="custom-file-input" id="customFile">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											</div>	
										</div>
										
										<div class="form-group">
											<button type="submit" class="btn btn-submit"><i class="fa fa-check-circle"></i>
											Submit</button>
										</div>
									</div>
								</div>

								<div class="row claim-row" id="form4">
									<div class="col-md-5">
										<img src="images/menu-4.png" class="img-fluid" alt="umrah-image">
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<label>Date of Retirement:</label>
											<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
										</div>
									
										<div class="form-group">
											<label>Notification No:</label>
											<input type="text" class="form-control">
										</div>
									
										<div class="form-group">
											<label>Date of Notification:</label>
											<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
										</div>
										
										<div class="input-group form-group">
											<label>Notification Copy:</label>
											<div class="custom-file">
											    <input type="file" name="cnic_copy" class="custom-file-input" id="customFile">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											</div>	
										</div>
										
										
										<div class="form-group">
											<button type="submit" class="btn btn-submit"><i class="fa fa-check-circle"></i>
											Submit</button>
										</div>
									</div>
								</div>

								<div class="row claim-row" id="form5">
									<div class="col-md-5">
										<img src="images/menu-5.jpg" class="img-fluid" alt="umrah-image">
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<label>Date of Death:</label>
											<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
										</div>
									
										<div class="form-group">
											<label>Death Reason:</label>
											<input type="text" class="form-control">
										</div>
									
										<div class="form-group">
											<label>Place of Death:</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="input-group form-group">
											<label>Copy of Death Certificate:</label>
											<div class="custom-file">
											    <input type="file" name="cnic_copy" class="custom-file-input" id="customFile">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											</div>	
										</div>
										
										
										<div class="form-group">
											<button type="submit" class="btn btn-submit"><i class="fa fa-check-circle"></i>
											Submit</button>
										</div>
									</div>
								</div>

								<div class="row claim-row" id="form6">
									<div class="col-md-5">
										<img src="images/menu-6.png" class="img-fluid" alt="umrah-image">
									</div>
									<div class="col-md-7">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Date of Accident:</label>
													<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Place of Accident:</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>Physician Name:</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Physician Contact No:</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="input-group form-group">
											<label>Copy of Medical Certificate:</label>
											<div class="custom-file">
											    <input type="file" name="cnic_copy" class="custom-file-input" id="customFile">
											    <label class="custom-file-label" for="customFile">Choose file</label>
											</div>	
										</div>
										
										<div class="form-group">
											<button type="submit" class="btn btn-submit"><i class="fa fa-check-circle"></i>
											Submit</button>
										</div>
									</div>
								</div>

								<div class="row claim-row" id="form7">
									<div class="col-md-5">
										<img src="images/menu-7.jpg" class="img-fluid" alt="umrah-image">
									</div>
									<div class="col-md-7">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Disease Name:</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Period From:</label>
													<input type="date" class="form-control" data-date="" data-date-format="DD/MM/YYYY" value="2000-01-01">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label>Hospital Name:</label>
											<input type="text" class="form-control">
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Physician Name:</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Physician Contact:</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="input-group form-group">
													<label>Last Medical Prescription:</label>
													<div class="custom-file">
													    <input type="file" name="cnic_copy" class="custom-file-input" id="customFile">
													    <label class="custom-file-label" for="customFile">Choose file</label>
													</div>	
												</div>
											</div>

											<div class="col-md-6">
												<div class="input-group form-group">
													<label>Application for Aid:</label>
													<div class="custom-file">
													    <input type="file" name="cnic_copy" class="custom-file-input" id="customFile">
													    <label class="custom-file-label" for="customFile">Choose file</label>
													</div>	
												</div>
												
												<div class="form-group">
													<button type="submit" class="btn btn-submit"><i class="fa fa-check-circle"></i>
													Submit</button>
												</div>
											</div>
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
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
	<script src="js/dashboard.js"></script>
</body>
</html>