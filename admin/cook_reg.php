<script src="assets/prison/js/sweetalert.min.js"></script>

<?php session_start();
session_regenerate_id();

require('connect.php');


// Escape user inputs for security
$cook_no = mysqli_real_escape_string($con, $_REQUEST['cook_no']);
$name = mysqli_real_escape_string($con, $_REQUEST['fullname']);
$admit_date = mysqli_real_escape_string($con, $_REQUEST['admit_date']);
$dob = mysqli_real_escape_string($con, $_REQUEST['dob']);
$address = mysqli_real_escape_string($con, $_REQUEST['address']);
$sex = mysqli_real_escape_string($con, $_REQUEST['gender']);




$query = "INSERT INTO cook (no, name, DOB, sex, starting_date, address) VALUES ('$cook_no','$name', '$dob', '$sex', '$admit_date','$address')";

if (mysqli_query($con, $query)) {
	echo '<script type="text/javascript">';
	echo 'setTimeout(function () { swal("Success","Successfully Added a Cook","success");';
	echo '});</script>';
	echo "<script>setTimeout(\"location.href = 'user.html';\",2000);</script>";
} else {
	echo "ERROR: Could not Add $query. " . mysqli_error($con);
}

//Close Connection
mysqli_close($con);
