<!DOCTYPE html>
<html>
<head>
	<title> Ragistration </title>
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
			<div id="heading">
				<a href="index.php">Indian Railways</a>
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
		
		<!-- registration form -->
		<div align="center">
		<div class="span12 well">
		<div style="font-size:30px;"> Signup</div>
		<br/>
		
		
		<div class="table">
		
		<form name="signup"  method="post" action="register.php" onsubmit="return valid12()">
		<table>
		<tr>
			<td style="border-top:0px;"> First Name <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="fname" class="input-block-level" placeholder="Enter the First name" onblur="return name1()"><span id="fn"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Last Name <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="lname" class="input-block-level" placeholder="Enter the Last name" onblur="return name12()"><span id="ln"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Email ID <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="email" class="input-block-level" name="eid" placeholder="Enter the valid email id"></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Password <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="password" class="input-block-level" name="psd" placeholder="Enter the password" onblur="return check1()"> <span id="ps" ></span></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Confirm Password <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="password" class="input-block-level" name="cpsd" placeholder="confirm the password" onblur="return confirm1()"> <span id="cps" ></span></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Gender <font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="gnd">
				<option value="male">MALE</option>
				<option value="female">FEMALE</option>
			    </select>
			</td>
		</tr>
		
		<tr>
			<td style="border-top:0px;">Marital Status <font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="mrt">
				<option value="married">Married</option>
				<option value="unmarried">Unmarried</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Date of Birth <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="date" class="input-medium"  name="dob"></td>
			<!--
			<td style="border-top:0px;"><select name="date">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="23">26</option>				
				<option value="27">27</option>				
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>				
			    </select>
				<select name="mon">
					<option value="jan">Jan</option>
					<option value="feb">Feb</option>
					<option value="mar">Mar</option>
					<option value="apr">Apr</option>
					<option value="may">May</option>
					<option value="jun">Jun</option>
					<option value="july">July</option>
					<option value="aug">Aug</option>
					<option value="sept">Sept</option>
					<option value="oct">Oct</option>
					<option value="nov">Nov</option>
					<option value="des">Des</option>
				</select>
				<select >

				<option value="1">2005</option>
				<option value="2">2004</option>
				<option value="3">2003</option>
				<option value="4">2002</option>
				<option value="5">2001</option>
				<option value="6">2000</option>
				<option value="7">1999</option>
				<option value="8">1998</option>
				<option value="9">1997</option>
				<option value="10">1996</option>
				<option value="11">1995</option>
				<option value="12">1994</option>
				<option value="13">1993</option>
				<option value="14">1992</option>
				<option value="15">1991</option>
				<option value="16">1990</option>
				<option value="17">1989</option>
				<option value="18">1988</option>
				<option value="19">1987</option>
				<option value="20">1986</option>
				<option value="21">1985</option>
				<option value="22">1984</option>
				<option value="23">1983</option>
				<option value="24">1982</option>
				<option value="25">1981</option>
				<option value="23">1980</option>				
				<option value="27">1979</option>				
				<option value="28">1978</option>
				<option value="29">1977</option>
				<option value="30">1976</option>
				<option value="31">1975</option>				
			    </select>
			</td>-->
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Mobile No. <font color=red>*</font> </td>
			<td style="border-top:0px;"> +91 <input type="text" class="input-block-level"  name="mobile" placeholder="" onblur="return mobile1()"> <span id="mn"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Security Question <font color=red>* </font></td>
			<td style="border-top:0px;">
				<select name="ques">
				<option value="What is your pets name ?">What is your pets name ?</option>				
				<option value="What was the name of your first school?">What was the name of your first school?</option>				
				<option value="What is your favorite hero?">What is your favorite hero?</option>
				<option value="What is your favorite movie?">What is your favorite movie?</option>
				</select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Your Answer <font color=red>* </font></td>
			<td style="border-top:0px;"> <input type="text" name="ans" class="input-block-level" placeholder="Enter the your answer" onblur="return ans1()"><span id="an"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"><input class="btn btn-info"type="submit" value="submit" id="subb" ></td>
			<td style="border-top:0px;"><input class="btn btn-info"type="reset" value="Reset"></td>
		</tr>
		
		</table>
		</form>
		</div>
		</div>
		</div>
		
		
		<!-- Footer -->
		<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2018 Copyright PVT Ltd.</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	Designed By : Team Mini Project</p>
			</div>
		</div>
		</footer>
	</div>

</body>
</html>
