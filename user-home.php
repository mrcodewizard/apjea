	<?php include "includes/head.php";?>
	<link rel="stylesheet" href="css/dashboard.css"/>
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
						<div class="row dashboxes">
							<div class="col-md-4">
								<div class="dash-box">
									<div class="dash-flex">
										<div class="dash-icon bg-grdgreen">
											<i class="fa fa-dollar"></i>
										</div>
										<div class="dash-detail">
											<h3>Amount History</h3>
											<p>$500</p>
										</div>
									</div>
									<div class="dash-bottom">
										<p>Updated Last 24 Hours</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dash-box">
									<div class="dash-flex">
										<div class="dash-icon bg-grdorange">
											<i class="fa fa-money"></i>
										</div>
										<div class="dash-detail">
											<h3>Total Funds</h3>
											<p>$5000</p>
										</div>
									</div>
									<div class="dash-bottom">
										<p>Updated Last 24 Hours</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dash-box">
									<div class="dash-flex">
										<div class="dash-icon bg-grdred">
											<i class="fa fa-briefcase"></i>
										</div>
										<div class="dash-detail">
											<h3>Claim Request</h3>
											<p>50</p>
										</div>
									</div>
									<div class="dash-bottom">
										<p>Updated Last 24 Hours</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row listboxes">
							<div class="col-md-6">
								<div class="list-box">
									<div class="list-head bg-grdpurple">
										<h3>Funds History</h3>
										<p>New Funds Added on March 23,2020</p>
									</div>
									<div class="list-detail">
										<table>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Salary</th>
												<th>Country</th>
											</tr>
											<tr>
												<td>01</td>
												<td>John Smith</td>
												<td>12,000</td>
												<td>United States</td>
											</tr>
											<tr>
												<td>02</td>
												<td>John Smith</td>
												<td>12,000</td>
												<td>United States</td>
											</tr>
											<tr>
												<td>03</td>
												<td>John Smith</td>
												<td>12,000</td>
												<td>United States</td>
											</tr>
											<tr>
												<td>04</td>
												<td>John Doe</td>
												<td>12,000</td>
												<td>United States</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="list-box">
									<div class="list-head bg-grdorange">
										<h3>Claim History</h3>
										<p>New claims on 15th September, 2016</p>
									</div>
									<div class="list-detail">
										<table>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Salary</th>
												<th>Country</th>
											</tr>
											<tr>
												<td>01</td>
												<td>John Smith</td>
												<td>12,000</td>
												<td>United States</td>
											</tr>
											<tr>
												<td>02</td>
												<td>John Smith</td>
												<td>12,000</td>
												<td>United States</td>
											</tr>
											<tr>
												<td>03</td>
												<td>John Smith</td>
												<td>12,000</td>
												<td>United States</td>
											</tr>
											<tr>
												<td>04</td>
												<td>John Smith</td>
												<td>12,000</td>
												<td>United States</td>
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
	<script>
		$(".nt-dropdown-content").hide();
		$(".nt-dropdown span.toggle").click(function(){
			$(".nt-dropdown-content").slideToggle(500);
		});
	</script>
</body>
</html>