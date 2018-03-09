<!DOCTYPE html>
<html>
<style>
<style>
table { padding:12px 8px; background-color:#90EE90;width:40%;height:40%;
}
h1{text-align:center; font-family:Times New Roman;color:#00FFFF;
}
input[type=button] { 
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
	}
input[type=submit] { 
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
	}
	
body{background-image:url(r1.jpg);
}
</style>
<head>
<title>rec login</title>
</head>
<body>
<table align="center" border="1"  style="border-collapse:collapse">
<h1 style=> RECUITER LOGIN </h1></td>
<form action="recloginaction.php" method="POST">
 <tr> 
   <td align="left"  style="padding:12px 8px">Email :
   <input type="text" name="email" id="email" Placeholder="Enter Your Mail"></td>
 </tr>
 <tr><td align="left"  style="padding:12px 8px">password:
 <input type="password" name="password" id="password" placeholder="Password"></td></br>
</td></tr>
<?php

	if(isset($_GET['id']))
	{
	
		echo "Invalid Email or Password";
	
	}


?>
<tr><td align="left"  style="padding:12px 8px"><input type="submit" value="LOGIN" onclick="myFunction()"> 
<a href="recreg.html"><input type="button" value="NEW EMPLOYER"></a>
</td>
</tr>
</form>
</table>
</body>
</html>