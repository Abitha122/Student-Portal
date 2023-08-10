<?php 
session_start();
include('include/config.php');
error_reporting(0);
?>
<html><head>
<link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading"><h3>Details</h3></div>
							<div class="panel-body">


<div id="print">
								<table border="1"  class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%"  >
				
									<tbody>

									<?php 
$bid=intval($_GET['bid']);
									$sql = "SELECT * from tblstudent  where tblstudent.id=:bid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':bid',$bid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	

		<tr>
											<th colspan="4" style="text-align:center;color:blue">Student Profile</th>
										</tr>
										<tr>
											<th>Student Name</th>
											<td><?php echo htmlentities($result->FullName);?></td>
											<th>Student Id</th>
											<td><?php echo htmlentities($result->StudentId);?></td>
										</tr>										
                                        <tr>											
											<th>Course</th>
											<td colspan=""><?php echo htmlentities($result->Course);?></td>
											<th>Subject</th>
											<td><?php echo htmlentities($result->Subject);?></td>				
										</tr>
											<tr>											
											<th>Admmission Date</th>
											<td><?php echo htmlentities($result->AdmissionDate);?></td>
											<th>Reg-Date</th>
											<td><?php echo htmlentities($result->RegDate);?></td>
										</tr>
									
                                        <tr>
											<th colspan="4" style="text-align:center;color:blue">personal Details</th>
										</tr>
											<tr>											
											<th>Name</th>
											<td><?php echo htmlentities($result->FullName);?></td>
											<th>Contact No</th>
											<td><?php echo htmlentities($result->ContactNo);?></td>
										</tr>
										<tr>
											<th>Gender</th>
											<td><?php echo htmlentities($result->Gender);?></td>
											<th>Email Id</th>
											<td><?php echo htmlentities($result->EmailId);?></td>
										</tr>
<tr>
	<th>Blood Group</th>
	<td><?php echo htmlentities($tdays=$result->BloodGroup);?></td>
	<th>Date Of Birth</th>
	<td><?php echo htmlentities($ppdays=$result->dob);?></td>
</tr>
<tr>
<th >Address</th>
	<td colspan="3"><?php echo htmlentities($tdays=$result->Address);?></td>
</tr>

</tbody>
								</table>
</div>
						</div>

					

					</div>
				</div>
				<p style= "margin: 5% auto;  text-align: center; font-size: 18px; text-decoration: underline; !important"><a href="list-student.php">Back to List</a>	</p>
			</div>
		</div>
	</div>


<?php }} ?>
</html>