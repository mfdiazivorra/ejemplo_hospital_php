<?php
// session_destroy();
// header ("Location: logout.php");


// if(isset($_SESSION['usuario'])) unset($_SESSION['usuario']);
// header ("Location: logout.php");

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}
?>
