<?php
session_start();
session_regenerate_id();
if (!isset($_SESSION['login']))
{
    header('location:index.php');
}


?>
<h1>welcome to dashboard</h1>
<a href="logout.php">Logout</a>