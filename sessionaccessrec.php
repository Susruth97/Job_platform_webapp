<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
	$conn		= new mysqli('localhost','root','','linking');
	$email		= $_POST['email'];
	$password	= $_POST['password'];
	$rset		= mysqli_query($conn, "Select uname,email from regrec where email ='$email' and password ='$password'");
	$rows		= mysqli_num_rows($rset);
	if($rows==0)
	{
		session_destroy();
		header('location:reclogin.php?id=0');
	}
	else
	{
		$row=mysqli_fetch_assoc($rset);
		$_SESSION['uname']=$row['uname'];
		$_SESSION['email']=$row['email'];
        

	}
}
else if(!isset($_session['email']))
{
	session_destroy();
	header('Location:reclogin.php>id=0');
}
?>