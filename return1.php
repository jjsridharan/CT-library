<?php
	include('databaseconnection.php');
session_start();
	$boid=$_POST['bid'];	
	$use=$_POST['us'];
        $fla=1;
	$r=mysqli_query($bd,"select * from books where bid='$boid'");
	$rs=mysqli_query($bd,"select * from staff where user='$use'");
        if(empty($boid) || empty($use))
        {
                $fla=0;
        }
        if($fla!=0)
        {
	    $row=mysqli_fetch_assoc($r);
            $h=1;
	    
	    if($r && $rs!=NULL)
		{
	   	$fie=$row['field'];
		if($row['qua']==0)
		$h=mysqli_query($bd,"update books set instock='YES' where bid='$boid'");
		$h=mysqli_query($bd,"update books set  qua=qua+1 where bid='$boid'");
           $h=mysqli_query($bd,"UPDATE field SET ava=ava+1 where name='$fie'");
	    $h=mysqli_query($bd,"delete from lend where hold='$use' and bid='$boid'");
               		echo '<center><h1>Successfully Updated!!</h1></center>';
			echo '<center><h2>Wait while you are forwarded....</h2></center>';
	   
         }
	else
		echo '<center><h1>Not Updated Try Again!!</h1></center>';;
       
        }
	else
		echo '<center><h1>Not Updated Try Again!!</h1></center>';;
	header('Refresh: 2; url=return.php');
	
?>	
