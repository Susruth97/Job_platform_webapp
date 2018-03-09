<?php
session_start();
		$email=$_SESSION['email'];
		$conn = new mysqli('localhost','root','','linking');
		$rset = mysqli_query($conn,"select uname,email,age,dob,gender,city,mobile,aadhar,experience,skill1,about from regemp where email='$email' ");
		//$row = mysqli_fetch_assoc($rset);
		while($row = mysqli_fetch_assoc($rset))
		{
			echo "<center> <table border = '1' width= '50%'>";
			echo "<tr><td>Name:</td><td>{$row['uname']}</tr></td>";
			echo "<tr><td>Email:</td><td>{$row['email']}</tr></td>";
			echo "<tr><td>Age:</td><td>{$row['age']}</tr></td>";
			echo "<tr><td>Dob:</td><td>{$row['dob']}</tr></td>";
			echo "<tr><td>Gender:</td><td>{$row['gender']}</tr></td>";
			echo "<tr><td>City:</td><td>{$row['city']}</tr></td>";
			echo "<tr><td>Mobile:</td><td>{$row['mobile']}</tr></td>";
			echo "<tr><td>Aadhar:</td><td>{$row['aadhar']}</tr></td>";
			echo "<tr><td>experience:</td><td>{$row['experience']}</tr></td>";
			echo "<tr><td>Skill:</td><td>{$row['skill1']}</tr></td>";
			echo "<tr><td>About:</td><td>{$row['about']}</tr></td>";
			echo "</center></table>";
			
		}
		

	
	?>
