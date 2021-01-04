<script src="assets/prison/js/sweetalert.min.js"></script>

<?php session_start();
session_regenerate_id();

require('connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$user = $_POST['textinput'];
	$pass = $_POST['passwordinput'];
	$auth = "SELECT gno FROM guard WHERE gno='$user' and password='$pass';";
	$result = mysqli_query($con, $auth);

	$count = mysqli_num_rows($result);
	if ($count == 1) {
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal("Success","Successfully Logged In","success");';
		echo '});</script>';
		echo "<script>setTimeout(\"location.href = 'user.html';\",2000);</script>";
	
	} else {
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal("Oops!!","Wrong Username/Password","error");';
		echo '});</script>';
		echo "<script>setTimeout(\"location.href = 'login_php.php';\",2000);</script>";
}
}

?>