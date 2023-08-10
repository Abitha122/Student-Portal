<?php 
session_start();
include('include/config.php');
error_reporting(0);

?>
	
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Student Portal | Admin Dashboard</title>

	
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="assets/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
<style>
	.btn{
		position: relative;
        left: 90%;   
		margin-top: 10px;
		background-color: black;
		color: white;
	}
	.btn:hover{
		position: relative;
        left: 90%;   
		margin-top: 10px;
		background-color: grey;
		color: white;
	}
</style>
</head>

<body>

<a href="logout.php" class="btn">Logout</a>
	<div class="ts-main-content">

		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
<?php 
$sql ="SELECT id from tblstudent";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$regusers=$query->rowCount();
?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($regusers);?></div>
													<div class="stat-panel-title text-uppercase">Students List</div>
												</div>
											</div>
											<a href="list-student.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3" >
										<div class="panel panel-default" >
											<div class="panel-body bk-success text-light" >
												<div class="stat-panel text-center"    style="height: 65px;">
												
													<div class="stat-panel-number h1 " style="height: 15px;"></div>
													<div class="stat-panel-title text-uppercase" >Create Student Profile</div>
												</div>
											</div>
											<a href="create-student.php" class="panel-footer text-center" >Create Profile &nbsp; </a>
										</div>
									</div>
									
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>









			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	 -->
	<script>
		
	// window.onload = function(){
    
	// 	// Line chart from swirlData for dashReport
	// 	var ctx = document.getElementById("dashReport").getContext("2d");
	// 	window.myLine = new Chart(ctx).Line(swirlData, {
	// 		responsive: true,
	// 		scaleShowVerticalLines: false,
	// 		scaleBeginAtZero : true,
	// 		multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
	// 	}); 
		
	// 	// Pie Chart from doughutData
	// 	var doctx = document.getElementById("chart-area3").getContext("2d");
	// 	window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

	// 	// Dougnut Chart from doughnutData
	// 	var doctx = document.getElementById("chart-area4").getContext("2d");
	// 	window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	// }
	// </script>
</body>
</html>
