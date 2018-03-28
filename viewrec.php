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
				<li class="active"><a href="index.html" accesskey="1" title="">Homepage</a></li>
				<li><a href="login.php" accesskey="2" title="">Add Books</a></li>
				<li><a href="viewrec.php" accesskey="3" title="">View Status</a></li>
				<li><a href="login2.php" accesskey="5" title="">Add Staff</a></li>
				<li><a href="login3.php" accesskey="4" title="">Lend Book</a></li>
<li><a href="login1.php" accesskey="4" title="">Return Book</a></li>

				<li><a href="http://www.ct.mitindia.edu/contact.html" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>

			<div id="forms">
				<p  style="font-size:200%;">View Books</p>
				<form method="post" action="">
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
                                              
                                        
					    </select>
					<input type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="Show Books"></input>
				</form>

			</div>
		<br><br><br>
			<div style="width:18%; margin:0 auto;">	
				<?php
if(isset($_POST['submit'])){
					include('databaseconnection.php');
					if(isset($_POST['de']))
					{
					$dep=$_POST['de'];
					$r=mysqli_query($bd,"select * from books where field='$dep'");
					echo "<table border=2 cellspacing='8'>";
					echo "<tr>";
					echo "<th height='50'>BookId</th>";
					echo "<th>BookName</th>";
					echo "<th>Field</th>";
					echo "<th>Available</th>";
					echo "</tr>";
					while($row=mysqli_fetch_assoc($r))
                   			{
						echo "<tr>";
						echo "<td height='50' style='width:100px'>".$row['bid']."</td>";
						echo "<td>".$row['bname']."</td>";
						echo "<td>".$dep."</td>";
						echo "<td>".$row['qua']."</td>";
						echo "</tr>";	
					}
					echo "</table>";
                    			}
}
				?>
			</div>
<div id="forms">
<form action="" method="post">
<input id="sub"	 name="fields" type="submit" value="Show all Fields"/>
</form>
</div>
<div style="width:18%; margin:0 auto;">	
				<?php
if(isset($_POST['fields'])){
					include('databaseconnection.php');
	$r=mysqli_query($bd,"select * from field");
					echo "<table border=2 cellspacing='8'>";
					echo "<tr>";
					echo "<th height='50'>Field Name</th>";
					echo "<th>Total No. of Books</th>";
					echo "<th>Available</th>";
					echo "</tr>";
					while($row=mysqli_fetch_assoc($r))
                   			{
						echo "<tr>";
						echo "<td height='50' style='width:100px'>".$row['name']."</td>";
						echo "<td>".$row['total']."</td>";
						echo "<td>".$row['ava']."</td>";
						echo "</tr>";	
					}
					echo "</table>";           			
}
				?>
			</div>

<div id="copyright" class="container">
	<p>Computer Technology Library,MIT | Anna University | Design by SRIDHARAN</a>.</p>
</div>
</body>
</html>
