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
					<div class="col-md-9 dash-main">
						<div class="row listboxes amt-dash-history">
							<div class="col-md-12">
								<div class="list-box">
									<div class="list-head bg-grdpurple">
										<h3>Claim History</h3>
										<p>Updated On 15th September, 2020</p>
									</div>
									<div class="list-detail">
										<table>
											<tr>
												<th>Claim No.</th>
												<th>Claim For</th>
												<th>Claim Date</th>
												<th>Status</th>
												<th>Amount</th>
												<th>Payment Status</th>
												<th>Info</th>
											</tr>
											<tr>
												<td>01</td>
												<td>Marriage</td>
												<td>12/10/2020</td>
												<td>Pending</td>
												<td>20,000</td>
												<td>Pending</td>
												<td>In Process</td>
											</tr>
											<tr>
												<td>02</td>
												<td>Marriage</td>
												<td>12/10/2020</td>
												<td>Pending</td>
												<td>20,000</td>
												<td>Pending</td>
												<td>In Process</td>
											</tr>
											<tr>
												<td>03</td>
												<td>Marriage</td>
												<td>12/10/2020</td>
												<td>Pending</td>
												<td>20,000</td>
												<td>Pending</td>
												<td>In Process</td>
											</tr>
											<tr>
												<td>04</td>
												<td>Marriage</td>
												<td>12/10/2020</td>
												<td>Pending</td>
												<td>20,000</td>
												<td>Pending</td>
												<td>In Process</td>
											</tr>
											<tr>
												<td colspan="4" class="text-right">Total:</td>
												<td>200,000</td>
												<td>&#128522;</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
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