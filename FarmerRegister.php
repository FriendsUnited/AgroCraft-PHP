<!DOCTYPE html>
<html>
	<head>
		<title>Farmer Registration Portal</title>
	</head>
	<body>

		<input type="text" name="name" placeholder="Name"><br>

		<input type="phonenumber" name="phonenumber" placeholder="Phone Number"><br>

		<textarea rows="4" cols="25" placeholder="Address"></textarea><br>

		<input type="text" name="pan" placeholder="Pan Number"><br>

		<input type="text" name="account" placeholder="Bank Account number"><br>

		<input type="text" name = "domain" placeholder = "Domain Name"><br>

		<input type ="password" name="password" placeholder="Password" required><br>

		<input type ="password" name="confirmpassword" placeholder="Confirm Password" required><br><br>

		<input type="submit" name="register" value = "Register">

	</body>
</html>

<?php 
include("Includes/db.php");

?>