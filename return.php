<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Assembly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140330

-->
<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		echo '<center><h2>Please Login</h2></center>';
		header('Location: index.html');
	}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<style>
			#scr
			{
				font-size:5em;
				color:#7D1935;
			}
			#top
			{
				margin-top:5%;
			}
			#r,#u,#d,#s
			{
				background-color:#4A96AD;
				
			}
			#r:hover,#u:hover,#d:hover,#s:hover
			{
				color:#000000;
				background-color:#ECECEA;
			}
			#forms
			{
				margin-top:10%;
				margin-left:40%;
			}
			#reg,#nam,#mai,#pho,#dep
			{
				width:40%;
				padding:10px 20px;
			}
			#sub
			{
				width:20%;
				padding : 8px;
				margin-left:10%;
				background:#7E8F7C;
			}	
			#reg:focus,#nam:focus,#mai:focus,#pho:focus,#dep:focus
			{
				border-color:#E44424;
			}
		</style>
</head>
<body>
<div class="title">
			<center><h2>Computer Technology Library</h2>
			<span class="byline">Master Yourself</span></center>
			</div><br><br><br>
			<div id="men">
			<ul>
				<li class="active"><a href="logs.php" accesskey="1" title="">Homepage</a></li>

			<li class="active"><a href="logs.php" accesskey="1" title="">Logout</a></li>

			</ul>
		</div>
	</div>

			<div id="forms">
				<p  style="font-size:160%;">Return Book<br><br>Enter Your book Id</p>
				<form method="post" action="return1.php">
					<input id="reg" name="bid" type="text" placeholder="Bookid" title="Enter Your Bookid" required><br><br><br><br>
					<input id="reg" name="us" type="text" placeholder="Register No or Employee Id" title="Enter Your Staff's Username" required><br><br><br><br>

					<input type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="Return"></input>
				</form>
			</div>

<div id="copyright" class="container">
	<p>Computer Technology Library,MIT | Anna University | Design by SRIDHARAN.</p>
</div>
</body>
</html>


