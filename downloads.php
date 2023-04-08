	<?php include "includes/head.php";?>
	<link rel="stylesheet" href="css/form.css"/>
</head>
<body>
	<div class="wrapper">
		<?php include "includes/topbar.php";?>
		<header class="title-header main-header">
			<div class="container">
				<div class="header-text">
					<h1 class="header-title">Downloads</h1>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><span>Downloads</span></li>
					</ul>
				</div>
			</div>
		</header>

		<main class="download-section">
			<div class="container">
				<h3 class="main-head text-center">Popular Downloads</h3>
				<div class="row">
					<div class="col-md-12">
						<div class="item-list row">
							<div class="col-2">
								<div class="item-image">
									<img src="images/book-1.png" class="img-fluid" alt="item-image">
								</div>
							</div>
							<div class="col-4">
								<div class="item-col">
									<h4>Chrome Save Setup File</h4>
									<p>Version x64</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<h4>File Size</h4>
									<p>3.64 MB</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<h4>Date</h4>
									<p>12/10/2018</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<button type="button" class="btn-download" download>Download File</button>
								</div>
							</div>
						</div>

						<div class="item-list row">
							<div class="col-2">
								<div class="item-image">
									<img src="images/book-2.png" class="img-fluid" alt="item-image">
								</div>
							</div>
							<div class="col-4">
								<div class="item-col">
									<h4>Chrome Save Setup File</h4>
									<p>Version x64</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<h4>File Size</h4>
									<p>3.64 MB</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<h4>Date</h4>
									<p>12/10/2018</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<button type="button" class="btn-download">Download File</button>
								</div>
							</div>
						</div>

						<div class="item-list row">
							<div class="col-2">
								<div class="item-image">
								  <img src="images/icon-one.png" class="img-fluid" alt="item-image">
								</div>
							</div>
							<div class="col-4">
								<div class="item-col">
									<h4>Chrome Save Setup File</h4>
									<p>Version x64</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<h4>File Size</h4>
									<p>3.64 MB</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<h4>Date</h4>
									<p>12/10/2018</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<button type="button" class="btn-download">Download File</button>
								</div>
							</div>
						</div>

						<div class="item-list row">
							<div class="col-2">
								<div class="item-image">
									<img src="images/book-2.png" class="img-fluid" alt="item-image">
								</div>
							</div>
							<div class="col-4">
								<div class="item-col">
									<h4>Chrome Save Setup File</h4>
									<p>Version x64</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<h4>File Size</h4>
									<p>3.64 MB</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<h4>Date</h4>
									<p>12/10/2018</p>
								</div>
							</div>
							<div class="col-2">
								<div class="item-col">
									<button type="button" class="btn-download">Download File</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
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
		</main>
    </div>
	<?php include "includes/footer.php"; ?>
	<script>
		function download(filename, text) {
	    var element = document.createElement('a');
	    element.setAttribute('href', '/dummy.pdf');
	    element.setAttribute('download', filename);

	    element.style.display = 'none';
	    document.body.appendChild(element);
	    element.click();
	    document.body.removeChild(element);
}

		// Start file download.
		document.getElementsByClassName("btn-download")[0].addEventListener("click", function(){
	    // Generate download of hello.txt file with some content
	    var text 	 = "Welcome to Constitution of Pakistan";
	    var filename = "https://falconlinks.com/dummy.pdf";
	    download(filename, text);
	}, false);
	</script>
</body>
</html>
