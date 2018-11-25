<?php
session_start();

if(!isset($_SESSION['admin'])){
	header("Location: index.html");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Add Event</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


	<!-- Bootstrap core CSS     -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="assets/css/animate.min.css" rel="stylesheet"/>

	<!--  Light Bootstrap Table core CSS    -->
	<link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="assets/css/demo.css" rel="stylesheet" />


	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

	<div class="wrapper">
		<?php require "sidebar.html" ?>

		<div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">
					<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
					    <span class="sr-only">Toggle navigation</span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					</button>                
						<a class="navbar-brand" href="#">Add Event</a>
					</div>
				</div>
			</nav>


			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="header">
									<h4 class="title">Add Event Details</h4>
								</div>
								<div class="content">
									<form method = "post" action = "eventprocess.php" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Event Name</label>
													<input type="text" class="form-control" placeholder="Add Event Name" name="title" value="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Event Date</label>
													<input type="date" class="form-control" placeholder="Add Event date" name="eventdate" value="">
												</div>
											</div>
										</div>	
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Event Description</label>
													<textarea rows="5" class="form-control" placeholder="Add description" name="description" value=""></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="form-group">
													<label>Link</label>
													<input type="text" class="form-control" placeholder="Add link" name="link" value="">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card card-user">
												<div class="image">
													<fieldset>
														<input type="file" name="image" accept="image/*">
													</fieldset>
												</div>
											</div>
										</div>
										<input type="submit" class="btn btn-info btn-fill pull-right" value="Add">
										<div class="clearfix"></div>
									</form>
									<div class="header">
										<h5>
											<?php
											if(isset($_GET['success'])){
												echo "Event Added Successfully!";
												unset($_GET['success']);
											}

											?>
										</h5>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>			

			<?php require "footer.html"; ?>


		</div>
	</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>
