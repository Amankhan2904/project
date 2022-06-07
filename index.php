<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php"><button>Logout</button>
		</a>
	<h1>This is Home page</h1>
	<table border=2 cellpadding=10 >
		<tr >
			<td>S.NO</td>
			<td>Size</td>
			<td>Prize</td>
			<td>Emi</td>
		</tr>

		<tr>
			<td>1</td>
			<td>32 sq ft</td>
			<td>2500</td>
			<td>12 month</td>
		</tr>
		
		<tr>
		<td>2</td>
		<td>56 sq ft</td>
		<td>4500</td>
		<td>36 month</td>
		</tr>

	</table>

	<br>
   <!-- Hello, <?php echo $user_data['user_name']; ?> -->


</body>
</html>