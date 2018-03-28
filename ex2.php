<?php
	session_start();
	if(!isset($_SESSION['ii1']))
	{
		$_SESSION['i1']="images/3.jpg";
	}
?>
<html>
<head>
</head>
<body>

<div>
<form method="post" action="change.php">
<input name="b1" id="b1" type="image" src="<?php echo $_SESSION['i1']; ?>" style="background-color:red; width:20%; height:20%; float:right"/>
<input type="hidden" name="page_form" value="1">
</form>
</div>

<div>
<form action="change.php" method="post">
<input name="b2" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%; float:right"/>
<input type="hidden" name="page_form" value="1">
</form>
</div>

<div>
<form action="change.php" method="post">
<input name="b3" type="image" src="images/1.jpg" style="background-color:red; width:20%; height:20%;float:right"/>
</form>
</div>

<div>
<form action="change.php" method="post">
<input name="b4" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b5" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b6" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b7" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b8" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b9" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b10" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b11" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b12" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b13" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form name="b14" action="change.php" method="post">
<input type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b15" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b16" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b17" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b18" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b19" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
<div>
<form action="change.php" method="post">
<input name="b20" type="image" src="images/1.jpg" style="background-color:blue; width:20%; height:20%;float:right">
</form>
</div>
</body>
</html>