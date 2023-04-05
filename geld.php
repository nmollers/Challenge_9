<?php
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database-name');
$con = mysqli_connect('localhost', 'root', '','myfashion');


// database insert SQL code
$sql = "SELECT geld FROM `customer` WHERE ID=25";

// insert in the database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	print = $rs
	exit();
}

?>