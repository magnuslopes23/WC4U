<?php
 include('server.php')
?>
<!DOCTYPE html>
<html>
<head>
    <title>signup Form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style='background:#070707'>
        <nav class="navbar">
            <div class="brand-title">WC4U</div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
            <div class="navbar-links">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index.php">EVENT</a></li>
                    <li><a href="index.php">DONATE</a></li>
                    <li><a href="index.php">CONTACT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </nav>
	<!-- <img class="wave" src="images/wave.png"> -->
	<div class="container">
		<div class="img">
			<img src="images/bg.svg">
		</div>
		<div class="login-content">
			<form action="signup.php" method="POST">
				<img src="images/avatar.svg">
				<h2 class="title" style='color:#F7DC5F'></h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<label style='color:white' for="username">Username</label>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		    	<label style='color:white' for="email" >Email</label>
           		    	<input type="email" class="input" name="email">
            	   </div>
            	</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<label style='color:white' for="password">Password</label>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>	
            	<input type="submit" class="btn" value="Sign Up">
            </form>
        </div>
    </div>
    <script>
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
        const navbarLinks = document.getElementsByClassName('navbar-links')[0]

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
    </script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
