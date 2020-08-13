<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> About US </title>
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
			 }
			?>
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
			</div>
		</div>
		<!-- Navigation bar -->
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
		
		<div class="span12 well">
		
			<div  style="float:left; margin-right:200px; margin-top:50px;">
			<div align="left" style="font-size:36px; font-family:'New Times Roman';" > About Us &nbsp;  
			<hr  style="border-bottom:1px solid #A0A0A0; border-top:1px solid #A0A0A0; width:500px;" /></div>
			<div >
				<div  style="margin-left:50px;">
					<table style="padding:5px;">
						<tr> 
							<td > Name &nbsp; </td>
							<td style="font-family:Cambria;"> : Gaurav Joshi</td>
						</tr>
						<tr>
							<td > Profession &nbsp; </td>
							<td style="font-family:Cambria;"> : T.E. Computer Engineering</td>
						</tr>
						<tr>
							<td > University &nbsp; </td>
							<td style="font-family:Cambria;"> : Pillai College Of Engineering </td>
						</tr>
						
						
					</table>
					<div style="margin-top:20px;">
						

					</div>
				</div>
			</div>
			</div>
			

			
			<br  />	
			<br  />
			
			<div style="margin-right:220px; float:right;" >
			<!-- <hr  style="border-bottom:1px solid #A0A0A0; border-top:1px solid #A0A0A0; width:500px; margin-top:10px;" /> -->
			
				<div class="about-detail" style="margin-left:50px; margin-top:10px;">
					<table style="padding:2px;">
						<tr> 
							<td> Name &nbsp; </td>
							<td style="font-family:Cambria;"> : Abhijay Nair </td>
						</tr>
						<tr>
							<td> Profession &nbsp; </td>
							<td style="font-family:Cambria;"> : T.E Computer Engineering </td>
						</tr>
						<tr>
							<td> University &nbsp; </td>
							<td style="font-family:Cambria;"> : Pillai College Of Engineering </td>
						</tr>
						
					</table>
					<div style="margin-top:20px;">

						<br  />	
			<br  />
			
			<div style="margin-right:300px; float:right;" >
			<!-- <hr  style="border-bottom:1px solid #A0A0A0; border-top:1px solid #A0A0A0; width:500px; margin-top:10px;" /> -->
			
				<div class="about-detail" style="margin-top:10px;">
					<table style="padding:5px;">
						<tr> 
							<td> Name &nbsp; </td>
							<td style="font-family:Cambria;"> : Darshan Kothwade </td>
						</tr>
						<tr>
							<td> Profession &nbsp; </td>
							<td style="font-family:Cambria;"> : T.E Computer Engineering</td>
						</tr>
						<tr>
							<td> University &nbsp; </td>
							<td style="font-family:Cambria;"> : Pillai College Of Engineering </td>
						</tr>
						
					</table>
					<div style="margin-top:10px;">

									<br  />	
			<br  />
			
			<!-- <div style="margin-left:100px; float:right;" > -->
			<!-- <hr  style="border-bottom:1px solid #A0A0A0; border-top:1px solid #A0A0A0; width:500px; margin-top:10px;" /> -->
			
				<div class="about-detail" style="margin-top:10px;">
					<table style="padding:5px;">
						<tr> 
							<td> Name &nbsp; </td>
							<td style="font-family:Cambria;"> : Ibti  </td>
						</tr>
						<tr>
							<td> Profession &nbsp; </td>
							<td style="font-family:Cambria;"> : T.E Computer Engineering</td>
						</tr>
						<tr>
							<td> University &nbsp; </td>
							<td style="font-family:Cambria;"> : Pillai College Of Engineering </td>
						</tr>
						
					</table>
					<div style="margin-top:20px;">
						
						
						<br>
					 	Follow Us On &nbsp;  
						<a href="www.facebook.com/" target="_blank"><img src="images/f.png"   /></a>
					
				
					</div>
			
			</div>
	</div>
	
		
		</div>
		<!-- Footer -->
		<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2018 Copyright PVT Ltd.</p>	
			</div>
			<div style="float:left;">
			<p class="text-right text-info" align="right">	Designed By : Team Mini Project</p>
			</div>
		</div>
		</footer>
	</div>
</body>
</html>