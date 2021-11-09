<?php
session_start();
unset($_SESSION["ID_Customer"]);
unset($_SESSION["username"]);
header("Location:login.php");
?>