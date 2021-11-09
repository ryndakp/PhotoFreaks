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


</head>
<body>
		<div class="container">

				<div class="main">
						<div class="sidebar">
						  <a class="active" href="#home">Add Photo</a>
						  <a href="your_photos.php">Your Photos</a>
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
							<div class="form_container">
								 <div class="form_adding_photo">
											  <form action="" method="POST">
												<label for="price">Price (USD)</label>
												<input type="number" id="fname" name="price" placeholder="Enter price" min="1" max="10000" required>

												<label for="description">Description</label>
												<input type="text" id="lname" name="description" placeholder="Enter description" required>

												<label for="link">Link To Image</label>
												<input type="text" id="image" name="img" placeholder="Add Link To Image" required>
											  
												<input type="submit" name="add_photo" value="Add Photo">
											  </form>
											  
										<?php
										
											if(isset($_POST['add_photo']))
											{
												$username=$_SESSION['username'];
												$query=oci_parse($con, "SELECT * FROM Users WHERE username='$username'");
												oci_execute($query); 
												
												
												
												while (oci_fetch($query))
												{													
													$user_id= oci_result($query, 'ID_USER');
												
													$price = $_POST['price'];
													$description= $_POST['description'];
													$img_link = $_POST['img'];
													
													$query1= oci_parse($con, "INSERT INTO Products (id_user, price, description, image) VALUES ('$user_id','$price','$description','$img_link')");
													$result1=oci_execute($query1);
													
													
															if($result1){
							
																echo '<script>alert( "Your record has been saved in the datebase ")</script> ';
															
															}
															else
															{
																echo '<script>alert( "Someting went wrong ")</script>';
															}
													
											}
											}
												
										
											?>
											  
								 </div>
							</div>
						</div>	
				</div>
		</div>
</body>
</html>