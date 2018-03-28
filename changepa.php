<?php
	include('databaseconnection.php');
      session_start();
	$use=$_POST['bid'];	
	$n1=$_POST['us'];
	$n2=$_POST['ps'];
	$rs=mysqli_query($bd,"select * from staff where mail='$use'");
     if($n1==$n2)
     {
	     if($rs)
		{
	   	$h=mysqli_query($bd,"update staff set pass='$n1' where mail='$use'");

		echo '<center><h1>Successfully Updated!!</h1></center>';
		echo '<center><h2>Wait while you are forwarded....</h2></center>';
          }
		else
			echo "<center><h1>Not updated</h1></center>";
     }
	else
		echo "Not Updated";
	session_unset();	
	session_destroy();
	header('Refresh : 5; url=index.html');
	
?>	

