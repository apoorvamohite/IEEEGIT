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

	<title>All Events</title>

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
						<a class="navbar-brand" href="#">All Events</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="logout.php">
									<p>Log out</p>
								</a>
							</li>
							<li class="separator hidden-lg hidden-md"></li>
						</ul>
					</div>
				</div>
			</nav>
			
			<?php
			require "../init.php";
			$sql = "SELECT * FROM events";
			$res = mysqli_query($con, $sql);
			?>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8">
							<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead class="thead-dark">
								<tr>
									<th>EventID</th>
									<th>Name</th>
									<th>Date</th>
									<th>Description</th>
									<th>Pic</th>
									<th>Link</th>
									<th> &nbsp;</th>
								</tr>
								</thead>
								<?php
								while($row=mysqli_fetch_assoc($res)){
									echo "<tr>";
									echo "<td>".$row['id']."</td>";
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['eventDate']."</td>";
									echo "<td>".$row['description']."</td>";
									echo "<td><a href=\"".$row['pic']."\">Open Picture</a></td>";
									echo "<td>".$row['link']."</td>";
									echo "<td><a href=\"removeEvent.php?table=events&id=".$row['id']."\">Remove</a></td>";
									echo "</tr>";
								}
								?>
							</table>
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
