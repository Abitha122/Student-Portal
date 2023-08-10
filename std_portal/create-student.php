
<?php 
session_start();
include('include/config.php');
error_reporting(0);

?>
<?php
if(isset($_POST['submit']))
  {
$fullname=$_POST['fullname'];
$studentid=$_POST['studentid'];
$gender=$_POST['gender'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$bloodgroup=$_POST['bloodgroup'];
$admissiondate=$_POST['admissiondate'];
$course=$_POST['course'];
$subject=$_POST['subject'];

$sql="INSERT INTO tblstudent (FullName,StudentId,Gender,EmailId,ContactNo,dob,Address,BloodGroup,AdmissionDate,Course,Subject) VALUES(:fullname,:studentid,:gender,:emailid,:contactno,:dob,:address,:bloodgroup,:admissiondate,:course,:subject)";
$query = $dbh->prepare($sql);
$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
$query->bindParam(':studentid',$studentid,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':emailid',$emailid,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
$query->bindParam(':admissiondate',$admissiondate,PDO::PARAM_STR);
$query->bindParam(':course',$course,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
    echo "<script>alert('Student details posted successfully');</script>";
}
else 
{
	echo "<script>alert('Something went wrong. Please try again');</script>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
	<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading"><h3>Details</h3></div>
							<div class="panel-body">
    
    <form action="create-student.php" name="submit" method="post">

	
        <table border="1"  class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	    <tr>
		 <td>Full Name: </td>
		 <td><input type="text" name="fullname" size="45" required></td>
		</tr>
		<tr>
		 <td>Student Id: </td>
		 <td><input type="text" name="studentid" size="45" maxlength="35" required></td>
		</tr>
		<tr>
		 <td>Gender: </td>
		 <td><select name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select></td>
		</tr>
        <tr>
		 <td>Date of Birth:</td>
		 <td>
         <input type="date" name="dob" required>
		 </td>
		</tr>
        <tr>
		 <td>Blood Group: </td>
		 <td><input type="text" name="bloodgroup" size="45" maxlength="5" required></td>
        </td>
        <tr>
		 <td>Admission Date: </td>
		 <td><input type="date" name="admissiondate" required></td>
         </td>
		<tr>
        <tr>
		 <td>Course: </td>
		 <td><select name="course" required>
                    <option value="BE">BE</option>
                    <option value="MTech">MTech</option>
                    <option value="BSc">BSc</option>
                    <option value="MSc">MSc</option>
                </select></td>
         </td>
         <tr>
         <td>Subject: </td>
		 <td><select name="subject" required>
                    <option value="CSE">CSE</option>
                    <option value="EC">EC</option>
                    <option value="EEE">EEE</option>
                    <option value="ME">ME</option>
                    <option value="IS">IS</option>
                </select></td>
		</tr>
        <tr>
		 <td>Email Id: </td>
		 <td><input type="text" name="emailid" size="45" maxlength="35" required></td>
		</tr>
		<tr>
		 <td>Contact No: </td>
		 <td><input type="text" name="contactno" size="45" maxlength="10" required></td>
        </td>
		<tr>
		<tr>
		 <td>Address: </td>
		 <td><input type="address" name="address" size="45" required></td>
		</tr>
 
		
		
		 <td colspan="2" align="center"> <br>
		 <input type="submit" name="submit" style="font-size: 20px; width: 150px;" class="btn btn-primary btn-block" value="Accept">
	
		</tr>
	  </table>
      
	  </div>
						</div>

					

					</div>
				</div>
				<p style= "margin: 5% auto;  text-align: center; font-size: 18px; text-decoration: underline; !important"><a href="dashboard.php">Back to DashBoard</a>	</p>
			</div>
		</div>
	</div>
        

    </form>
</body>
</html>
