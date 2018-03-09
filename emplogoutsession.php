<?php
session_start();
session_destroy();
echo "You have successfully logged out";
echo "<font size='5'><a href='emplogin.php'>click here to login again</a></font>";
?>