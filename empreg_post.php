<html>
<head>
<title></title>
</head>
<body>
<?php
		$uname    = $_POST['uname'];
		$email   = $_POST['email'];
		$age      = $_POST['age'];
		$dob      = $_POST['dob'];
		$gender   = $_POST['gender'];
		$city      = $_POST['city'];
		$mobile   = $_POST['mobile'];
		$aadhar      = $_POST['aadhar'];
		$experience      = $_POST['experience'];
		$skill1      = $_POST['skill1'];
		//$skill2    = $_POST['skill2'];
	//	$skill3   = $_POST['skill3'];
		//$money      = $_POST['money'];
		$about   = $_POST['about'];
		$password    = $_POST['password'];
		$conn = new mysqli('localhost','root','','linking');
		mysqli_query($conn,"Insert into regemp (uname,email,age,dob,gender,city,mobile,aadhar,experience,skill1,about,password) values ('$uname','$email','$age','$dob','$gender','$city','$mobile','$aadhar','$experience','$skill1','$about','$password')");
	?>	
<!DOCTYPE html>
<html>
<head>
<title> Udyogi page</title>
<style>
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 12px;
    cursor: pointer;
}
h1{font-size:30px;}
.resume {background-color: #4CAF50;}
.group {background-color: #4CAF50; }
.inbox {background-color: #4CAF50; }
.hii{text-align:center;font-size:30px;}
.hi{height:200px;width:400px;border-collapse:collapse;border-color:#A52A2A;}
body  {
    background-image: url("c1.jpg");
    background-color: #cccccc;
	background-repeat:no-repeat;
}
#button1{width:125px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
		  }
		  
#button2{width:125px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
		}
#button3{width:125px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
		  
	   }
#button4{width:125px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
        }
		  
#button5{width:125px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
		 } 
#button6{width:125px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
        }		  
#button7{width:125px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
        }		  
table,tr,td{align:center;}
</style>
</head>
<body>
         <a href="home.html">
		<button type="button Home-button" id="button1">Home</button></a>
		<a href="aboutusemp.html"><button type="button About Us-button" id="button2">About Us</button></a>
		<a href="resume.php"><button type="button Resume-button" id="button4">Resume</button></a>
		<a href="contactusemp.html"><button type="button Contact us-button" id="button5">Contact Us</button></a>
		<a href="groups.html"><button type="button Groups-button" id="button6">Groups</button></a>
		<a href="logout.php"><button type="button Logout-button" id="button7">Logout</button></a>
		
 <table class="hi">
  <tr><td align="center"><h1>Related Links</h1></td></tr>
  <tr><td><a href="http://www.planningcommission.gov.in/reports/genrep/rep_skillsch.pdf" target="_blank" style="color:#8B0000;font-size:22px">Skill Development Activities</a> </td></tr>
    <tr><td><a href="http://www.nscsindia.org/NSCSTrainingPartners.aspx" target="_blank" style="color:#8B0000;font-size:22px">National Skill Certification</a> </td></tr>
	   <tr><td><a href="http://msmehyd.ap.nic.in/Skill%20Development.htm" target="_blank" style="color:#8B0000;font-size:22px">MSME</a> </td></tr>
  </table>
</body>
</html>
	

	
</body>
</html>