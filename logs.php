<?php
session_start();
session_unset();
session_destroy();
echo '<center><h1>Successfully Logged Out!!</h1></center>';
header('Refresh: 2; url=index.html');
?>