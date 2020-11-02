<!DOCTYPE html>
<html>
<head>
    <title>events</title>
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
                    <li><a href="index.html"> HOME</a></li>
                    <li><a href="#">EVENT</a></li>
                    <li><a href="index.html">DONATE</a></li>
                    <li><a href="index.html">CONTACT</a></li>
                    <li><a href="signup.html">SIGN UP</a></li>
                </ul>
            </div>
        </nav>
	<!-- <img class="wave" src="images/wave.png"> -->
	<div class="container">
		<div class="img">
			<img src="images/events.svg">
		</div>
		<div class="login-content">
			<form action="event.php">
                <p style='color:#00bcd4;font-size:22px;letter-spacing:1px'>We also collect funds by organising social events</p>
                <p style='color:#00bcd4;font-size:28px;'>COME JOIN US NOW</p>
                <label for="reservation" style='color:#F7DC5F;font-size:22px;letter-spacing:1px'>Select An Event:</label>
                <select name="reservation" id="reservation" class='reservation'>
                    <div class='options'>
                        <option value="beachcleaning">Beach Cleaning</option>
                        <option value="marathon">Marathon</option>
                        <option value="blooddon">Blood Donation</option>
                    </div>
                </select>
                <p style='color:#00bcd4;font-size:22px;letter-spacing:1px'>Registration fee is &#x20B9 100. You can help by donating more</p>
                <input type="number" class='btn-2' min='100' value='100'>
            	<input type="submit" class="btn" value="Register">
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