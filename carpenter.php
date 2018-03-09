<html>
	<head>
	<title>Retrieve data from carpenter database </title>
	</head>
	<body>

	<?php
	
	mysql_connect("mysql.myhost.com", "user", "carpenter") or die (mysql_error ());

	
	mysql_select_db("mydatabase") or die(mysql_error());

	
	$strSQL = "SELECT * FROM carpenter";

	
	$rs = mysql_query($strSQL);
	

	while($row = mysql_fetch_array($rs)) {

	  
	  echo $row['locatiion'] . "<br />";

	  }

	
	mysql_close();
	?>
	</body>
	</html>
	
	