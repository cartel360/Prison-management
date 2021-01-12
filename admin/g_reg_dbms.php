<script src="assets/prison/js/sweetalert.min.js"></script>

<?php session_start();
session_regenerate_id();

require('connect.php');


$no = mysqli_real_escape_string($con, $_REQUEST['number']);
$name = mysqli_real_escape_string($con, $_REQUEST['name']);
$dob = mysqli_real_escape_string($con, $_REQUEST['dob']);
$address = mysqli_real_escape_string($con, $_REQUEST['address']);
$admit_date = mysqli_real_escape_string($con, $_REQUEST['admit_date']);
$sex = mysqli_real_escape_string($con, $_REQUEST['gender']);
$block_no = mysqli_real_escape_string($con, $_REQUEST['block_no']);
$shift = mysqli_real_escape_string($con, $_REQUEST['shift']);
$password = mysqli_real_escape_string($con, $_REQUEST['password']);


$query = "INSERT INTO guard (gno, gname, DOB, address, starting_date, sex, assigned_block, shift, password) VALUES ('$no', '$name', '$dob', '$address','$admit_date','$sex','$block_no','$shift', '$password')";


if (mysqli_query($con, $query)) {
	echo '<script type="text/javascript">';
	echo 'setTimeout(function () { swal("Success","Successfully Added a Guard","success");';
	echo '});</script>';
	echo "<script>setTimeout(\"location.href = 'user.html';\",2000);</script>";
} else {
	echo "ERROR: Could not Add $query. " . mysqli_error($con);
}

//Close Connection
mysqli_close($con);




?>