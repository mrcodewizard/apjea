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
								<div class="list-box funds-box">
									<div class="list-head bg-grdorange">
										<h3>Funds History</h3>
										<p>Updated On 15th September, 2020</p>
									</div>
									<div class="list-detail">
										<table>
											<tr>
												<th>Sr No.</th>
												<th>Date</th>
												<th>Receipt</th>
												<th>User ID</th>
												<th>User Name</th>
												<th>Amount</th>
												<th>Balance</th>
												<th>Action</th>
											</tr>
											<tr>
												<td>01</td>
												<td>12/10/20202</td>
												<td>1001</td>
												<td>080</td>
												<td>John Doe</td>
												<td>Pending</td>
												<td>In Process</td>
												<th><i class="fa fa-print"></i></th>
											</tr>

											<tr>
												<td>02</td>
												<td>12/10/20202</td>
												<td>1001</td>
												<td>080</td>
												<td>John Doe</td>
												<td>Pending</td>
												<td>In Process</td>
												<th><i class="fa fa-print"></i></th>
											</tr>
											 <tr>
												<td>03</td>
												<td>12/10/20202</td>
												<td>1001</td>
												<td>080</td>
												<td>John Doe</td>
												<td>Pending</td>
												<td>In Process</td>
												<th><i class="fa fa-print"></i></th>
											</tr>
											<tr>
												<td>04</td>
												<td>12/10/20202</td>
												<td>1001</td>
												<td>080</td>
												<td>John Doe</td>
												<td>Pending</td>
												<td>In Process</td>
												<th><i class="fa fa-print"></i></th>
											</tr>
											
											<tr>
												<td colspan="5" class="text-right">Total:</td>
												<td>200,000</td>
												<td>&#128522;</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="col-md-12 page-column">
								<ul class="pagination">
									<li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
									<li><a href="#" class="active">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
								</ul>
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