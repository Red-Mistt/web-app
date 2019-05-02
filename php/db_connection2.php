<?php
$dbhost = 'comp-hons.uhi.ac.uk';
$dbuser = 'mo16007637';
$dbpass = 'mo16007637';
$dbname = 'Sports Camp';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno())
{
	$msg = "Database connection failed ";
	$msg .= mysqli_connect_errno();
	$msg .= " (" .mysqli_connect_errno() . ")";
	exit($msg);
}




?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>