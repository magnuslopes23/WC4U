<!DOCTYPE html>
<html>
<head>
    <title>Donate</title>
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
                    <li><a href="index.php"> HOME</a></li>
                    <li><a href="index.php">EVENT</a></li>
                    <li><a href="index.php">DONATE</a></li>
                    <li><a href="index.php">CONTACT</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                </ul>
            </div>
        </nav>
	<!-- <img class="wave" src="images/wave.png"> -->
	<div class="container">
		<div class="img">
			<img src="images/donate.svg">
		</div>
		<div class="login-content">
			<form action="donate.php">
                <div class='wrapper'>
                    <p style='color:#00bcd4;font-size:22px;letter-spacing:2px'>We want to do more and you can help by</p>
                    <p style='color:#00bcd4;font-size:30px;'>DONATING NOW</p>
                    <div  class="tooltip">
                        <input type="submit"  class="donate-btn" value="&#x20B9 6000">
                        <span class="tooltiptext">Can bring immediate relief to one child in need</span>
                    </div>
                    <div  class="tooltip-1">
                        <input type="submit"  class="donate-btn" value="&#x20B9 9600">
                        <span class="tooltiptext">Can bring immediate relief to 2 children in need.</span>
                    </div>
                    <div  class="tooltip-2">
                        <input type="submit"  class="donate-btn" value="&#x20B9 12000">
                        <span class="tooltiptext">Can bring immediate relief to 3 children in need.</span>
                    </div>
                    <div  class="tooltip-3">
                        <input type="submit"  class="donate-btn" value="&#x20B9 18000">
                        <span class="tooltiptext">Can bring immediate relief to 4 children in need.</span>
                    </div>
                    <input type="number" class='btn-2' placeholder='Other Amount' >
            	    <input type="submit" class="btn" value="Donate">
                </div>
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