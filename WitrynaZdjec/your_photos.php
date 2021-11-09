<?php
include 'connection.php';
session_start();
?>

<html>
<head>
	<meta charset="UTF-8">
    <title>PhotoFreaks </title>
    <link rel="stylesheet" href="css/user_panel_style.css" type="text/css">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/user_panel_style.css" type="text/css">

</head>
<body>
		<div class="container">

				<div class="main">
						<div class="sidebar">
						  <a href="user_panel.php">Add Photo</a>
						  <a class="active" href="your_photos.php">Your Photos</a>
						  <a href="logout.php">Logout</a>
						</div>
							
						<div class="content">
						<div class="header">
						
						  <div class="logo">
							<img src="img/logo.jpg" id="logo_image">
						</div>
						
						<div class="welcome">
							<p id="welcome_text"><?php echo 'Welcome, ' . $_SESSION['username'] . ' !'?></p>	
						</div>
						<hr>
						</div>
						
							<div class="your_photos_container">
								
									<?php 
										$username=$_SESSION['username'];
										$query=oci_parse($con, "SELECT * FROM Users WHERE username='$username'");
										oci_execute($query); 
												
										while(oci_fetch($query)){
										
										$user_id= oci_result($query, 'ID_USER');
										$sql = oci_parse($con, "SELECT * FROM Products WHERE id_user='$user_id' ORDER BY id_products ASC");
										oci_execute($sql);
													
													while(oci_fetch($sql))
													{
													$_SESSION['id']=oci_result($sql,'ID_PRODUCTS');
									?>
													<div class="photos_img">
											<img src= " <?php echo oci_result($sql, 'IMAGE') ?>">
										</div>
										<div class="photos"  style="
										float:left;
										font-family:'Bebas Neue', cursive; 
										font-size:30px;
										width:35%;
										
										height:10%;
										">
											<p> <?php echo oci_result($sql, 'PRICE') ?> USD</p>
										</div>
										
										<div class="photos" style="
										float:right;
										font-family:'Bebas Neue', cursive; 
										font-size:30px; 
										width:45%;
										height:10%;
										
										text-align:right;
										">
											<p><?php echo oci_result($sql, 'DESCRIPTION') ?></p>
										</div>
										<div class="delete" style="
										
										clear:both;
										height:5%;
										font-size:30px;
										text-align:center;
										padding-bottom:20px;
										">
										<a href="delete_record.php?id=<?php echo $_SESSION['id']; ?>" style="text-decoration:none; color:red;"> DELETE PHOTO </a>
										
										</div>
													
									<?php		
										}
										}
												?>
												
							</div>
						</div>	
				</div>
		</div>
</body>
</html>