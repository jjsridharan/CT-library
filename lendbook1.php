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
	    
	    if($r && $rs)
		{
			if($row['instock']=='YES' && $row['qua']>0)
	    {
		$fie=$row['field'];
		if($row['qua']==1)
		$h=mysqli_query($bd,"update books set instock='NO' where bid='$boid'");
		$h=mysqli_query($bd,"update books set qua=qua-1 where bid='$boid'");
   		 $r=mysqli_query($bd,"INSERT INTO lend VALUES('$use','$boid')");


	    $h=mysqli_query($bd,"update field set ava=ava-1 where name='$fie'");

	    	
               		echo '<center><h1>Successfully Added!!</h1></center>';
			echo '<center><h2>Wait while you are forwarded....</h2></center>';
	   
	    }
        else
		echo '<center><h1>Impropers data!!</h1></center>';;
         }
	else
		echo '<center><h1>Improper data!!</h1></center>';;
       
        }
	else
		echo '<center><h1>Improper data!!</h1></center>';;	
	header('Refresh: 5; url=lendbook.php');
	
?>	