<?php 
 session_start();
 $_SESSION['username'] = "omkar";
 $_SESSION['role'] = 'admin';

 echo "Session variable are set" ."<br>";

 echo "Welcome " . $_SESSION['username'];

 unset($_SESSION['username']);
 session_unset();
 session_destroy();
?>