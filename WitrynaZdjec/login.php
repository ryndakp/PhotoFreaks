<?php
include 'connection.php'

 
?>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	<meta charset="UTF-8">
    <title>PhotoFreaks </title>
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/fontello/css/fontello.css" type="text/css">
    <link rel="stylesheet" href="css/login_style.css">
</head>
<body>
   
    <section class="left-section">
		
        <div id="left-cover" class="cover cover-hide">
		<img src="img/background_login.jpg">
            <h1>Welcome !</h1>
            <h3>Already have an account ?</h3>
            <button type="button" class="switch-btn" onclick="location.reload()">Login</button>
        </div>
        <div id="left-form" class="form fade-in-element">
            <h1>Login</h1>
            <form action="" method="post">
                <input type="text" name="user_name" class="input-box" placeholder="User Name" required>
                <input type="password" name="user_pass" class="input-box" placeholder="Password" required>
                <input type="submit" name="login" class="btn" value="Login">
				<?php
				session_start();
					if(isset($_POST["login"]))  
				 {  
					  if(empty($_POST["user_name"]) && empty($_POST["user_pass"]))  
					  {  
						   echo '<script>alert("Both Fields are required")</script>';  
					  }  
					  else  
					  {  
						   $user_name = $_POST["user_name"];  
						   $user_pass = $_POST["user_pass"];  
						   $user_password = md5($user_pass);  
						   $query = oci_parse($con, "SELECT * FROM Users WHERE username = '$user_name' AND password = '$user_pass'");  
						   $result =oci_execute($query);  
						   $row= oci_fetch_all($query,$result);
						   
						   if($row)  
						   {  
								
								$_SESSION["username"] = $user_name;  
								header("location:user_panel.php");  
						   }  
						   else  
						   {  
								echo '<script>alert( "Wrong user details ")</script>';
						   }  
					  }  
				 }  
				
				?>
				
				
            </form>
        </div>
    </section>

    <section class="right-section">
        <div id="right-cover" class="cover fade-in-element">
            <img src="img/background_login.jpg" alt="">
            <h1>Welcome !</h1>
            <h3>Don't have an account ?</h3>
            <button type="button" class="switch-btn" onclick="switchSignup()">Signup</button>
        </div>
        <div id="right-form" class="form form-hide">
            <h1>Signup</h1>
            <form action="" method="POST">
                <input type="text" name="username" class="input-box" placeholder="User Name" required>
				<input type="text" name="firstname" class="input-box" placeholder="First Name" required>
				<input type="text" name="lastname" class="input-box" placeholder="Last Name" required>
                <input type="email" name="email" class="input-box" placeholder="Email" required>
                <input type="password" name="password" class="input-box" placeholder="Password" required>
                <input type="password" name="cpass" class="input-box" placeholder="Confirm Password" required>
                <input type="submit" name="register" class="btn" value="Signup">
            </form>
			<?php
			if(isset($_POST['register'])){
				$username= ($_POST['username']);
				$firstname = ($_POST['firstname']);
				$lastname = ($_POST['lastname']);
				$email = ($_POST['email']);
				$pass = ($_POST['password']);
				$cpass =($_POST['cpass']);
				
				if($pass != $cpass)
				{
					echo '<script>alert( "Passwords not matched ")</script>';
				}
				else{
				$password= md5($pass);
				$query= oci_parse($con, "INSERT INTO Users(username, password, first_name, last_name, e_mail) VALUES('$username','$password', '$firstname','$lastname','$email')");
				$result=oci_execute($query);
				
				if($result){
				
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
    </section>

    <script src="js/login_register.js"></script>

</body>
</html>