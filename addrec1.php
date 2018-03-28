<?php
	include('databaseconnection.php');
	session_start();
	$boid=$_POST['bid'];
	$bna=$_POST['bn'];
	$fie=$_POST['de'];
	$au=$_POST['aut'];
	$pu=$_POST['pub'];
        $fla=1;
	   $g=1;
	$r=mysqli_query($bd,"select * from books where bid='$boid'");
      	if(mysqli_num_rows($r)==1)
	{
		$fla=1;
		$g=0;
		$rr=mysqli_query($bd,"UPDATE field SET total=total+1,ava=ava+1 where name='$fie';");
		$r=mysqli_query($bd,"UPDATE books SET qua=qua+1,instock='YES' where bid='$boid';");
		echo '<center><h1>BookId already there<br></h1></center>'; 
		header('Refresh: 2; url=addrec.php');
	}
        if(empty($boid) || empty($bna) || empty($fie))
        {
                $fla=0;
			$g=0;
        }
        if($fla==1 && $g==1)
        {
	    $r=mysqli_query($bd,"INSERT INTO books VALUES('$boid','$bna','$fie','YES','$au','$pu',1)");
	    if($r)
	    {	
			$rr=mysqli_query($bd,"UPDATE field SET total=total+1,ava=ava+1 where name='$fie';");
	               	echo '<center><h1>Successfully Added!!</h1></center>';
		echo '<center><h2>Wait while you are forwarded....</h2></center>';
	    }
            else
		echo '<center><h1>Not Registered Try Again!!</h1></center>';
       
        }
	else if($fla==1 && $g==0)
		echo '<center><h1>Quantity Updated!!</h1></center>';
	else
		echo '<center><h1>Not Registered Try Again!!</h1></center>';
	header('Refresh: 2; url=addrec.php');
	
?>	