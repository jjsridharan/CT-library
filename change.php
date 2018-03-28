<?php
	session_start();
	echo "asdf";
	
if(isset($_POST['page_form'])) 
{
    switch ($_POST['page_form'])
    {
    case "1":
	$_SESSION['ii1']=true;
        $_SESSION['i1']="images/1.jpg";
        break;
    case "2":
        echo "form 2 submitted<br>";
       break;
    default:
        die ("something's not right there");
    }
}
header('Location:ex2.php');
	
?>	