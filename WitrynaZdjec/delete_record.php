<?php
include 'connection.php';
session_start();

		$id = $_SESSION['id_products'];
		$del = oci_parse($con, "DELETE FROM Products WHERE id_products='$id'");
		$result = oci_execute($del);
		
		if($result)
		{
			header("location:your_photos.php");
			echo '<script>alert( "Your photo has been deleted from database ")</script> ';
		}
		else
		{
			echo '<script>alert( "Your photo has been deleted from database ")</script> ';
		}
		
		
		
?>