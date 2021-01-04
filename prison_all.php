<html>

<head>


	<title>Prison Mangement | Prisoners </title>


	<link rel="stylesheet" href="assets/dashboard.css">


	<link rel="stylesheet" href="assets/prison/DataTables/datatables.min.css">
	<link rel="stylesheet" href="assets/prison/css/buttons.dataTables.min.css">

	<script src="assets/prison/js/jquery-2.2.4.min.js"></script>
	<script src="assets/prison/DataTables/datatables.min.js"> </script>
</head>

<body>


	<header>
		<nav class="myNavbar">
			<div class="box">
				<a href="user.html">
					<img class="go-back" src="assets/images/seal-of-the-federal-bureau-of-prisons.svg-122x122.png">
				</a>
				<span>
					<a class="go-back-text" href="user.html">Prison Management &nbsp;</a>
				</span>
			</div>
			</div>
		</nav>
	</header>


	<hr>

	<?php
	$con = mysqli_connect("localhost", "root", "", "dbms_prison");

	//mysqli_select_db($con,"_4nm16is009");
	$result = $con->query("SELECT * FROM prisoner");
	?>

	<h2 class="title"> All Prisoners </h2>



	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Prisoner No</th>
				<th>Name</th>
				<th>Admit Date</th>
				<th>DOB</th>
				<th>Address</th>
				<th>Crime</th>
				<th>Sex</th>
				<th>Prison Type</th>
				<th>Duration</th>
				<th>Cell No</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<?php
				while ($row = mysqli_fetch_array($result)) {

					echo "<td>" . $row['pno'] . "</td>";
					echo "<td>" . $row['Name'] . "</td>";
					echo "<td>" . $row['admit_date'] . "</td>";
					echo "<td>" . $row['DOB'] . "</td>";
					echo "<td>" . $row['address'] . "</td>";
					echo "<td>" . $row['crime'] . "</td>";
					echo "<td>" . $row['sex'] . "</td>";
					echo "<td>" . $row['ptype'] . "</td>";
					echo "<td>" . $row['duration'] . "</td>";
					echo "<td>" . $row['cellno'] . "</td>" . "</tr>";
				}

				?>
			</tr>

		</tbody>

	</table>


	<script>
		$(document).ready(function() {
			$('#example').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdfHtml5',
					'print'
				]
			});
		});
	</script>
</body>

</html>