<script src="assets/prison/js/sweetalert.min.js"></script>

<?php

session_start();
session_regenerate_id();

require('connect.php');

$admin_query = mysqli_query($con, "SELECT email from admin");

while ($row = mysqli_fetch_array($admin_query)) {
	$email = $row['email'];
}



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
	echo 'Sucess';
} else {
	echo "ERROR: Could not Add $query. " . mysqli_error($con);
}

//Close Connection
mysqli_close($con);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$form_data = array("prisoner_no" => $prisoner_no, "name" => $name, "admit_date" => $admit_date, "dob" => $dob, "address" => $address, "crime" => $crime, "sex" => $sex, "type" => $type, "duration" => $duration, "cell_no" => $cell_no);

$message = "Hello Admin \r\n";
$message .= "A new Prisoner has been added. Prisoner number is " .$form_data['prisoner_no']. "\r\n";
$message .= "Name is  " . $form_data['name'] . " admitted on " . $form_data['admit_date'] . " charged with " . $form_data['crime'] . " and given a duration of " . $form_data['duration'] . " \r\n";
$message .= "The cell number is " . $form_data['cell_no'] . ".\r\n";
$message .= "Prisoner address is " . $form_data['address'] . " and has been accorded " . $form_data['type'] .  "\r\n";
$message .= "Thank You.\r\n";
$message .= "Have a good day.\r\n";



//PHPMailer Object
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "prisonmanagement2003@gmail.com"; // Enter your Email
$mail->Password = "prisonmanagement61"; // Enter your Email Password
$mail->SetFrom("prisonmanagement2003@gmail.com");
$mail->Subject = "New Prisoner Added";
$mail->Body = $message;
$mail->AddAddress($email);

if (!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "<script>
            alert('Prisoner Added Successfully');
            window.location.href='user.html';
            </script>";
}



?>