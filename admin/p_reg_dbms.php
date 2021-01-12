<script src="assets/prison/js/sweetalert.min.js"></script>

<?php

session_start();
session_regenerate_id();

require('connect.php');



// Escape user inputs for security
$prisoner_no = mysqli_real_escape_string($con, $_REQUEST['prisoner_no']);
$name = mysqli_real_escape_string($con, $_REQUEST['fullname']);
$admit_date = mysqli_real_escape_string($con, $_REQUEST['admit_date']);
$dob = mysqli_real_escape_string($con, $_REQUEST['dob']);
$address = mysqli_real_escape_string($con, $_REQUEST['address']);
$crime = mysqli_real_escape_string($con, $_REQUEST['crime']);
$sex = mysqli_real_escape_string($con, $_REQUEST['gender']);
$type = mysqli_real_escape_string($con, $_REQUEST['type']);
$duration = mysqli_real_escape_string($con, $_REQUEST['duration']);
$cell_no = mysqli_real_escape_string($con, $_REQUEST['cell_no']);




$query = "INSERT INTO prisoner (pno, Name, admit_date, DOB, address, crime, sex, ptype, duration, cellno) VALUES ('$prisoner_no','$name','$admit_date','$dob','$address','$crime','$sex','$type','$duration','$cell_no')";

if (mysqli_query($con, $query)) {
	echo '<script type="text/javascript">';
	echo 'setTimeout(function () { swal("Success","Successfully Added a Prisoner","success");';
	echo '});</script>';
	echo "<script>setTimeout(\"location.href = 'user.html';\",2000);</script>";
} else {
	echo "ERROR: Could not Add $query. " . mysqli_error($con);
}

//Close Connection
mysqli_close($con);

?>