<?php include 'sessionaccessrec.php';?>

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

body  {
    background-image:url("r1.jpg");
    background-color: #cccccc;
	background-repeat:no-repeat;
}
#button1{width:110px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
		  }
		  
#button2{width:110px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
		}
#button3{width:110px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
		  
	   }
#button4{width:120px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
        }
		  
#button5{width:120px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
		 } 
#button6{width:120px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
        }		  
#button7{width:120px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
        }
#button8{width:120px;
          height:40px;
		  background-color:#4682B4;
		  color:white;
        }		
table,tr,td{align:center;}
</style>
</head>
<body>

<?php

$email=$_POST['email'];
$password=$_POST['password'];
echo "Login Successfull Welcome to your Home Page";

?>
		<a href="aboutus.html"><button type="button About Us-button" id="button2">About Us</button></a>
		<a href=""><button type="button Inbox-button" id="button3">Inbox</button></a>
		<a href=""><button type="button Compose-button" id="button4">Compose</button></a>
		<a href=""><button type="button sent-button" id="button8">sent</button></a>
		<a href="contactus.html"><button type="button Contact us-button" id="button5">Contact Us</button></a>
		<a href="offerajob.html"><button type="button Offer a Job-button" id="button6">Offer a Job</button></a>
		<a href="logoutrec.php"><button type="button Logout-button" id="button7">Logout</button></a>
		
 
</body>
</html>