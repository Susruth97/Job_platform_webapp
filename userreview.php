<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Movie Rating</title>
<meta name="keywords" content="wedding store, free web templates, free css templates" />
<meta name="description" content="Wedding Store is a free web template for everyone. Download this template from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<header>
<h1><font size = '35' color  = "#ff0000" face = "Andalus"><center>Tolly Movie Rating Portal</center></font></h1>
</header>
<body>

<div id="templatemo_wrapper_outter">

	<div id="templatemo_wrapper_inner">
    <!--Start of Header Template-->

		<?php include 'Header.php';?>

    	 <!-- end of templatemo_header -->
	
	<!--Start of Menu Template-->

		<!--<?php include 'Menu.php';?><br>-->
		<div id="templatemo_menu">
    
        <ul>
            <li><a href="#" class="current">Home</a></li>
            <li><a href="addmovie.php">Add Movies</a></li>
			<li><a href="#">View Reviews</a></li>
			<li><a href="#">Gallery</a></li>
            <li><a href="contactss.php">Contact Us</a></li>
            <li><a href="Main1.php">Logout</a></li>

        </ul>    	
    
    </div>

	<!-- end of templatemo_menu -->

	<!--starting of sidebar-->

 <!--  <?php include 'sidebar.php';?>-->

	
<?php
		//$mid =$_POST['movie'];

		$conn = new mysqli('localhost','movie','siva@05','movierating');
		$rset = mysqli_query($conn,"select mname,actor,actress,musicdir,producer,director,review,rating from movies where mid=$mid");
		//$row = mysqli_fetch_assoc($rset);
		while($row = mysqli_fetch_assoc($rset))
		{
			echo "<center> <table border = '1' width= '50%'>";
			echo "<tr><td>Movie Name:</td><td>{$row['mname']}</tr></td>";
			echo "<tr><td>Actor:</td><td>{$row['actor']}</tr></td>";
			echo "<tr><td>Actress:</td><td>{$row['actress']}</tr></td>";
			echo "<tr><td>Music Director:</td><td>{$row['musicdir']}</tr></td>";
			echo "<tr><td>Producer:</td><td>{$row['producer']}</tr></td>";
			echo "<tr><td>Director:</td><td>{$row['director']}</tr></td>";
			echo "<tr><td>Review:</td><td>{$row['review']}</tr></td>";
			echo "<tr><td>Rating:</td><td>{$row['rating']}</tr></td>";
			echo "</center></table>";
			
		}
		

	
	?>


	<!--starting of footer-->
    
     <?php include 'footer.php';?>        


    <!-- end of footer -->
    
    </div> <!-- end of templatemo_wrapper_inner -->

</div> <!-- end of templatemo_wrapper_outter -->

<!--<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>-->
</body>
</html>