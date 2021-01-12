<script src="assets/prison/js/sweetalert.min.js"></script>

<?php session_start();
session_regenerate_id();

require('connect.php');



// Escape user inputs for security

$name = mysqli_real_escape_string($con, $_REQUEST['fullname']);
$sex = mysqli_real_escape_string($con, $_REQUEST['gender']);
$prisoner_name = mysqli_real_escape_string($con, $_REQUEST['prisoner_name']);
$address = mysqli_real_escape_string($con, $_REQUEST['address']);
$relation = mysqli_real_escape_string($con, $_REQUEST['relation']);





$query = "INSERT INTO visitor (name, sex, prisoner, address, relation) VALUES ('$name', '$sex', '$prisoner_name', '$address', '$relation')";


if (mysqli_query($con, $query)) {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { swal("Success","Successfully Added a Visitor","success");';
    echo '});</script>';
    echo "<script>setTimeout(\"location.href = 'user.html';\",2000);</script>";
} else {
    echo "ERROR: Could not Add $query. " . mysqli_error($con);
}

//Close Connection
mysqli_close($con);

?>