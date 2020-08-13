<?php
session_start();
$tbl_name="users"; // Table name
$name=$_SESSION['name'];

$host="localhost";
$username="root";
$password="";
$db_name="test";
$id = $_REQUEST['id'];
mysql_connect("$host","$username","$password")or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select db");
	
$result=mysql_query("DELETE FROM booking WHERE ID = '$id'");
header("Location: myreservations.php?m=cancelled");