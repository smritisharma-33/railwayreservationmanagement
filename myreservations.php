<?php
session_start();
$tbl_name="users"; // Table name
$name=$_SESSION['name'];

$host="localhost";
$username="root";
$password="";
$db_name="test";

mysql_connect("$host","$username","$password")or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select db");

$result=mysql_query("SELECT * FROM $tbl_name WHERE mobile='$name'");
$row=mysql_fetch_array($result);

$result1=mysql_query("SELECT * FROM booking WHERE uname='$name'");
//echo " n: ".$name." mail: ".$row['email']."  age: ".$row['l_name']."  cont: ".$row['dob']."   area: ".$row['mobile'];
//echo "".mysql_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title> Reservation Historyx </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
</head>

<body>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/jquery-latest.js"></script>
	
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
				$_SESSION['error']=15;
				//echo "fgfggy".$_SESSION['error'];
				header("location:login1.php");
			 } 
			 ?>
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
			</div>
		</div>

		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT US</a>
				</div>
			</div>
		</div>
		<div class="span12 well pass1">
			<h2>Reservation History</h2>
			<table cellspacing="5px" cellpadding="5px" style="width:100%;" class='table table-responsive'>
				<tr>
					<th>Sr. No</th>
					<th>Train Number</th>
					<th>Class</th>
					<th>Name</th>
					<th>Age</th>
					<th>Update</th>
				</tr>
				<tr>
					<?php
					//$row1=mysql_fetch_array($result1);
					$i=1;
						while($row1=mysql_fetch_array($result1)){
							//echo $row1['uname'];
							echo '<td>' . $i . '</td>';
							echo '<td>' . $row1['Tnumber'] . '</td>';
							echo '<td>' . $row1['class'] . '</td>';
							echo '<td>' . $row1['Name'] . '</td>';
							echo '<td>' . $row1['Age'] . '</td>';
							echo '<td><a href="del.php?id=' . $row1['ID'] . '">Cancel Ticket</a></td>';
							$i++;
						}

						if($i==1){
							echo "<hr><h3>No Reservations History</h3>";
						}
					?>
				</tr>
		</div>
	</div>
</body>
</html>