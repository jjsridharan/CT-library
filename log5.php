<?php
      include('databaseconnection.php');
      session_start();
      $use=$_POST['us'];
      $pas=$_POST['pa'];
      $_SESSION['user']=$use;
	 $stmt = mysqli_prepare($bd, "select * from login where user=? && pass=?");
	 mysqli_stmt_bind_param($stmt, 'ss', $use, $pas);	
      mysqli_stmt_execute($stmt);
	 mysqli_stmt_store_result($stmt);
	 if(mysqli_stmt_num_rows($stmt)==1)
      {	
        echo '<center><h1>Successfully logged in!</h1></center>';
        echo '<center><h2>Wait while you are forwarded....</h2></center>';	
	   sleep(2);
	   header('Refresh: 2; url=changepass.php');
      }
      else	
      {
		echo '<center><h1>Wrong Username or password!!!</h1></center>';
		sleep(2);
      	header('Refresh: 2; url=index.html');
      }
     
?>						

