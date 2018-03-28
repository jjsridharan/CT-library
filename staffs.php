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
<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		echo '<center><h2>Please Login</h2></center>';
		header('Location: index.html');
	}

?>


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
				margin-left:33%;
			}
			#reg,#nam,#mai,#pho,#dep
			{
				width:40%;
				padding:10px 20px;
			}
			#sub
			{
				width:20%;
				margin-left:8%;
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
				<li><a  href="logs.php" accesskey="5" title="">Log Out</a></li>
			</ul>
		</div>
	</div>

			<div id="forms">
				<form method="post" action="changepass.php">
					<input type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="Change Password"></input>
				</form>

			</div>
<div id="forms">
<form action="" method="post">
<input id="sub"	 name="fields" type="submit" value="Show all Borrowed"/>
<br><br><br><br><br>
</form>
</div>
<div style="width:25%; margin:0 auto;">	
				<?php
if(isset($_POST['fields'])){

					include('databaseconnection.php');
$b=$_SESSION['user'];
$r=mysql_query("select * from lend");		
echo "<table border=2 cellspacing='8'>";
					echo "<tr>";
					echo "<th height='50'>Book Name</th>";
					echo "<th>Book Id</th>";
					echo "</tr>";
				 while($row=mysql_fetch_assoc($r))
                   	 {
					if($row['hold']==$_SESSION['user'])
{
						echo "<tr>";
$b=$row['bid'];
$g=mysql_query("select * from books where bid=$b");
while($gg=mysql_fetch_assoc($g))
{
						echo "<td height='50' style='width:100px'>".$gg['bname']."</td>";
						echo "<td>".$row['bid']."</td>";
						echo "</tr>";	
					}
		}
}
					echo "</table>";           			
}
				?>
			</div>

<div id="copyright" class="container">
	<p>Computer Technology Library,MIT | Anna University | Design by SRIDHARAN.</p>
</div>
</body>
</html>

