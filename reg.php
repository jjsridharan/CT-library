<?php
	include('databaseconnection.php');
	session_start();
	$name=$_POST['na'];
	$mai=$_POST['ma'];
	$user=$_POST['user'];
	$pass=$_POST['ps'];
	$_SESSION['us']=$user;
        $fla=1;
	$r=mysqli_query($bd,"select * from staff where mail='$mai'");
      if(mysqli_num_rows($r)==1)
	{
		$fla=0;
		echo '<center><h1>Mail Id Already Exists<br></h1></center>'; 
		header('Refresh: 3; url=addstaff.php');

	}
        if(empty($name) || empty($pass) || empty($mai) || empty($user))
        {
                $fla=0;
        }
        if($fla!=0)
        {
	    $r=mysqli_query($bd,"INSERT INTO staff VALUES('$user','$pass','$mai','$name')");
	    if($r)
	    {	
               	echo '<center><h1>Successfully Registered!!</h1></center>';
		echo '<center><h2>Wait while you are forwarded....</h2></center>'; 	
	    }
            else
		echo '<center><h1>Not Registered Try Again!!</h1></center>';
       
        }
	else
		echo '<center><h1>Not Registered Try Again!!</h1></center>';	
	header('Refresh: 2; url=addstaff.php');
?>	