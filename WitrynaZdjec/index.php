<?php
include 'connection.php';

session_start();

 
?>

<html>
<head>
	<meta charset="UTF-8">
    <title>PhotoFreaks </title>
    <link rel="stylesheet" href="css/index_style.css" type="text/css">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>


<body>
		
		
		<div class="container">
					<div class="header_container">
						<div class="menu_top_container">
							<div class="logo">
								<img src="img/logo.jpg" id="logo_image">
							</div>
							<div class="menu">
									<div class="topnav">
									<a  href="#photos_con" id="photos">Photos </a>
									<a href="#footer_" id="singup">Contact</a>
									<a href="login.php" id="singup">Sing Up</a>
									</div>
							</div>
						
						</div>
					</div>

					
					<div class="content_photo">
						<div class="photos_container" id="photos_con">
									<?php 
										$query = oci_parse($con, "SELECT * FROM Products ORDER BY id_products ASC");
										oci_execute($query);
										
										while ( oci_fetch($query))
										{
											
												
											
									?>
									
										<div class="photos_img">
											<img src= " <?php echo oci_result($query, 'IMAGE') ?>">
										</div>
										<div class="photos" style="
										float:left;
										font-family:'Bebas Neue', cursive; 
										font-size:30px;
										width:35%;
										padding-bottom:15px;
										height:10%;
										">
											<p> <?php echo oci_result($query, 'PRICE') ?> USD</p>
										</div>
										
										<div class="photos" style="
										float:right;
										font-family:'Bebas Neue', cursive; 
										font-size:30px; 
										width:45%;
										height:10%;
										padding-bottom:15px;
										text-align:right;
										">
											<p><?php echo oci_result($query, 'DESCRIPTION') ?></p>
										</div>

										<div class="email_author">
											
										</div>
											
		
										 
									
									<?php 
										
										}
										
										
									?>
						</div>
					<div>
		
					<div class="footer" id="footer_">
					<hr style="width:50%; align:center; ">
								<p> Author: Ryndak Patrycja &copy; 2021 All rights reserved </p>
								<p> Phone:500 729 852 </p>        
								<p>    E-mail: ryndak.patrycja@wp.pl </p>
					</div>
		
		
		
		</div>

</body>
</html>