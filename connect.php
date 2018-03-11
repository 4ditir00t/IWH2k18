<?php
$username = "aditi";
$password = "Aditi123";
$hostname = "localhost";

$dbhandle = mysqli_connect($hostname,$username,$password) or die("Could not connect to data base");
$connected=mysqli_select_db($dbhandle,"aditi");

?>