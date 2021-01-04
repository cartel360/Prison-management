<script src="assets/prison/js/sweetalert.min.js"></script>

<?php session_start();
session_regenerate_id();

require('connect.php');



// Escape user inputs for security
$cleaner_no = mysqli_real_escape_string($con, $_REQUEST['cleaner_no']);
$name = mysqli_real_escape_string($con, $_REQUEST['fullname']);
$dob = mysqli_real_escape_string($con, $_REQUEST['dob']);
$sex = mysqli_real_escape_string($con, $_REQUEST['gender']);
$admit_date = mysqli_real_escape_string($con, $_REQUEST['admit_date']);
$address = mysqli_real_escape_string($con, $_REQUEST['address']);
$cell_no = mysqli_real_escape_string($con, $_REQUEST['cell_no']);





$query = "INSERT INTO cleaner (cno, cname, DOB, sex, starting_date, caddress, assigned_cellno) VALUES ('$cleaner_no','$name','$dob','$sex','$admit_date','$address','$cell_no')";


if (mysqli_query($con, $query)) {
	echo '<script type="text/javascript">';
	echo 'setTimeout(function () { swal("Success","Successfully Added a Cleaner","success");';
	echo '});</script>';
	echo "<script>setTimeout(\"location.href = 'user.html';\",2000);</script>";
} else {
	echo "ERROR: Could not Add $query. " . mysqli_error($con);
}

//Close Connection
mysqli_close($con);

?>