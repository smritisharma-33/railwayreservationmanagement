<?php session_start();

if(!isset($_SESSION["name"]))
header("location:index.php");

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name


//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");


?>