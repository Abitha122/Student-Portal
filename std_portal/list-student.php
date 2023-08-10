<?php 
session_start();
include('include/config.php');
error_reporting(0);
?>
<html><head>
    <link rel="stylesheet" href="assets/bootstrap.min.css">

</head>
<?php 
//Query for Listing count
$sql = "SELECT id from tblstudent";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=$query->rowCount();
?>
<h2>Total <span style="background-colour: lightgrey;"><?php echo htmlentities($cnt);?> List</span></h2>

<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title"></h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Student Lists</div>
							<div class="panel-body">

								<form action="#" method="post">
                            <label for="">Search:
                            <input type="search" area-controls="zctb" name="search">
							<input type="submit" value="search">
                            </label>
							</form>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
									
											<th>Id</th>
											<th>FullName</th>
											<th>StudentId</th>
											<th>Contact No</th>
											<th>Course</th>
											<th>Subject</th>
											<th>View profile</th>
										
										</tr>
									</thead>
                                    
									<tfoot>
										<tr>
								
											<th>Id</th>
											<th>FullName</th>
											<th>StudentId</th>
											<th>Contact No</th>
											<th>Course</th>
											<th>Subject</th>
											<th>View profile</th>
	
										</tr>
									</tfoot>
									<tbody>

<?php $sql = "SELECT * from tblstudent";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>
 
 <tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->FullName);?></td>
											<td><?php echo htmlentities($result->StudentId);?></td>
											<td><?php echo htmlentities($result->ContactNo);?></td>
											<td><?php echo htmlentities($result->Course);?></td>
											<td><?php echo htmlentities($result->Subject);?></td>
                                            <td><a href="student-profile.php?bid=<?php echo htmlentities($result->id);?>"> View details</a>
</td>

										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

                                </div>
						</div>

					</div>
				</div>
				<p style= "margin: 5% auto;  text-align: center; font-size: 18px; text-decoration: underline; !important"><a href="dashboard.php">Back to DashBoard</a>	</p>
			</div>
		</div>
	</div>

    </html>

