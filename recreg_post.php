<html>
<head>
<title></title>
</head>
<body>
<?php
		$uname    = $_POST['uname'];
		$email   = $_POST['email'];
		$age      = $_POST['age'];
		$gender   = $_POST['gender'];
		$city      = $_POST['city'];
		$mobile   = $_POST['mobile'];
		$aadhar      = $_POST['aadhar'];
		$about   = $_POST['about'];
		$password    = $_POST['password'];
		$conn = new mysqli('localhost','root','','linking');
		mysqli_query($conn,"Insert into regrec (uname,email,age,gender,city,mobile,aadhar,about,password) values ('$uname','$email','$age','$gender','$city','$mobile','$aadhar','$about','$password')");
		echo "Registration Successfull";
	?>
</body>
</html>