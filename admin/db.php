<?php
/*
$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());
echo $con;
*/
$con = mysqli_connect("localhost","root","root","hotel");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 