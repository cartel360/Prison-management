<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	    $no = $_POST['noinput'];
        $name = $_POST['nameinput']; 
        $sex = $_POST['gender'];
	    $d_date = $_POST['date'];
	    $address = $_POST['add_input'];

	  
	 $query= "insert into cook values ('$no','$name','$sex','$d_date','$address')";
	 $result = mysqli_query($con,$query);
	 echo "Successfully Added";
	 
 
	 
	 
	 }
