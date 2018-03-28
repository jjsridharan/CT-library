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
				<p  style="font-size:160%;">New Book</p>
				<form method="post" action="addrec1.php">
					<input id="reg" name="bid" type="text" placeholder="Bookid" title="Enter Your Bookid" required><br><br>
					<input id="nam" name="bn" type="text" placeholder="Book Name" required><br><br>
<input id="nam" name="aut" type="text" placeholder="Author Name" required><br><br>
<input id="nam" name="pub" type="text" placeholder="Publications Name" required><br><br>

					<select id="dep" name="de" required>  
     					      <option value="" selected disabled>Please select Your Department</option>
                                              <option value="AI">ARTIFICIAL INTELLIGENCE</option>
                                              <option value="CD">COMPILER DESIGN</option>
                                              <option value="CE">COMMUNICATION ENGINEERING GROUP</option>
                                              <option value="CO">COMPUTER ORGANIZATION GROUP</option>
                                              <option value="DB">DATABASE MANAGEMENT GROUP</option>
                                              <option value="DC">DISTRIBUTED COMPUTING GROUP</option>
                                              <option value="DS">DATA STRUCTURES AND ALGORITHMS</option>
                                              <option value="EL">ELECTRONICS GROUP</option>
                                              <option value="GC">GRID AND CLOUD COMPUTING</option>
									 <option value="GE">GENERAL GROUP</option>
                                              <option value="JA">JAVA GROUP</option>
                                              <option value="MA">MAT:MATHEMATICS</option>
                                              <option value="MIS">MANAGEMENT INFORMATION SYSTEMS</option>
                                              <option value="MM">MULTIMEDIA GROUP</option>
                                              <option value="MP">MICROPROCESSOR & EMBEDDED SYSTEM</option>
                                              <option value="NW">NETWORKS</option>
                                              <option value="OO">C++ AND OBJECT ORIENTED PROGRAMMING</option>
                                              <option value="OS">OPERATING SYSTEMS</option>
									 <option value="PL">PROGRAMMING LANGUAGE</option>
                                              <option value="SE">SOFTWARE ENGINEERING</option>
                                              <option value="VP">VISUAL PROGRAMMING GROUP</option>
                                              <option value="WN">WIRELESS NETWORKS</option>
                                              <option value="ML">MACHINE LEARNING</option>
                                              <option value="NT">NETWORK TECHNOLOGY</option>
                                              <option value="NS">NETWORK SECURITY</option>
                                              <option value="SC">SOFT COMPUTING</option>
                                              <option value="PC">PARALLEL COMPUTING</option>
									 <option value="DB">DATABASE</option>
                                              <option value="WT">WEB TECHNOLOGY</option>
                                              <option value="CC">CLOUD COMPUTING</option>
                                              <option value="BD">BIG DATA</option>
                                              <option value="EL">E-LEARNING</option>
                                              <option value="ES">EMBEDDED SYSTEM</option>
                                              
                                        </select><br><br><br>
					<input type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="Register"></input>
				</form>
			</div>

<div id="copyright" class="container">
	<p>Computer Technology Library,MIT | Anna University | Design by SRIDHARAN</a>.</p>
</div>
</body>
</html>
