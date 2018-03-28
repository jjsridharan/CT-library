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
			<h2>Computer Technology Library</h2>
			<span class="byline">Master Yourself</span>
			</div>
<div id="men">
			<ul>
				<li class="active"><a href="index.html" accesskey="1" title="">Homepage</a></li>
				<li><a href="logs.php" accesskey="5" title="">Log out</a></li>
			</ul>
		</div>
	</div>

			<div id="forms">
				<p  style="font-size:160%;">Change Password<br></p>
				<form method="post" action="changepa.php">
					<input id="reg" name="bid" type="email" placeholder="Mail Id" title="Enter Your Username" required><br><br><br><br>
					<input id="reg" name="us" type="text" placeholder="New Password" title="Enter Your New Password" required><br><br><br><br>

					<input id="reg" name="ps" type="text" placeholder="Re-enter New Password" title="Re-Enter Your New Password" required><br><br><br><br>

					<input type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="Change Password"></input>
				</form>
			</div>

<div id="copyright" class="container">
	<p>Computer Technology Library,MIT | Anna University | Design by SRIDHARAN.</p>
</div>
</body>
</html>




