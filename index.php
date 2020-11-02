<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel='stylesheet' href='./css/styles.css' >
    <title>WC4U</title>
</head>
<body>
    <div class='container'>
        <nav class="navbar">
            <div class="brand-title">WC4U</div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
            <div class="navbar-links">
                <ul>
                    <li><a href="#"> HOME</a></li>
                    <li><a href="#events">EVENT</a></li>
                    <li><a href="#donate">DONATE</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <div class='conatiner-1'>
            <div>
                <img class='logo' src="./images/logo.png" alt="">
                <p class='logo-text'>WE CARE FOR YOU</p>   
            </div>
            <div class='para'>
                <h1 style='font-family:Courgette, cursive;color:#F7DC5F'>Welcome</h1>
                <p style='text-align:left;font-family:Courgette, cursive;font-size:18px;color:#F7DC5F'><strong>OUR ORPHANS</strong> Meet the most amazing kids in the world.<br>
                Our children are the very heart of our mission. Though all come from destitute and desperate situations, they are all cared for as members of our large family and treated as the beautiful individuals that they are. As with all children worldwide, each boy and girl comes to us with their own unique dreams, passions and talents. Our job is to develop the whole person, not simply feed and clothe a needy child.</p>            
            </div>
        </div>
        <br id='events'>
        <div class='container-2' >
            <h2 class='event-title'>EVENTS &nbsp WE &nbsp ORGANISE</h2>
            <a href="event.html"><img class='event-image' src="images/beach.jpg" alt=""></a>
            <a href="event.html"><img class='event-image' src="images/marathon.jpg" alt=""></a> 
            <a href="event.php"><img class='event-image' src="images/blood.jpg" alt=""></a>
        </div>
        <br><br>
        <div class='container-3' id='donate'>
            <h2 class='event-title'>DONATE &nbsp NOW</h2>
            <a href="donate.php"> <img class='donate-image' src="images/mother.jpg" alt=""></a>
        </div>
    </div>
    <section class='contact' id='contact'>
      <div class='content'>
        <h2>CONTACT US</h2>
      </div>
      <div class='container-4'>
        <div class='contactInfo'>
          <div class='box'>
              <div class='icon'><i class="fa fa-map-marker 1x" ></i></div>
              <div class="text">
                <h3>ADDRESS</h3>
                <span> We Care For You, <br>
                  Virar west, <br>
                  Mumbai 401301</span>
              </div>
          </div>
          <div class='box'>
              <div class='icon'><i class="fa fa-phone fa-1x" aria-hidden="true"></i></div>
              <div class="text">
                <h3>PHONE</h3>
                <span>+91 8698720039 <br>+91 9975382882</span>
              </div>
          </div>
          <div class='box'>
            <div class='icon'><i class="fa fa-envelope fa-1x" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Email</h3>
                <span><a href="mailto:magnuslopes23@gmail.com" style='color:#F7DC5F;text-decoration:none'>magnuslopes23@gmail.com <br> mervinkzar@gmail.com</a></span>
              </div>
          </div>
        </div>
        <div class="contactForm">
          <form action="">
            <h2>Send Message</h2>
            <div class='inputBox'>
              <input type="text" name='' required>
              <span>Full Name</span>
            </div>
            <div class='inputBox'>
              <input type="text" name='' required>
              <span>Email</span>
            </div>
            <div class='inputBox'>
              <textarea style='background-color:white;color:black' name="" id="" cols="30" rows="10" required></textarea>
              <span>Your Feeedback</span>
            </div>
            <div class='inputBox'>
              <input type="submit" value='Send'>
            </div>
          </form>
        </div>
      </div>
    </section>
    <br>
    <br>
    <footer class="footer-distributed" id="contact">
        <div class="footer-left">
            <h3> <span><img src="./images/logo.png" id="logo" width='30px' height='30px' alt=""> WC4U</span></h3>
            <p class="footer-links">
            <a href="#" class="link-1">Home</a>
            <a href="#events">Events</a>
            <a href="#donate">Donate</a>
            <a href="#contact">Contact</a>
            <a href="login.html">Login</a>
            </p>
            <p class="footer-company-name">WC4U © 2020</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span><span> We Care For You, <br>
                  Virar west, 
                  Mumbai 401301</span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p><span>+91 8698720039 <br>+91 9975382882</span></p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:itsasfitofficial@gmail.com">magnuslopes23@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About WC4U</span>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe deserunt qui incidunt optio rem soluta corporis amet et harum laboriosam eveniet est voluptas beatae.
            </p>
            <div class="footer-icons">
                <a href="https://instagram.com/sfit_itsa?igshid=19hn3d3x02n06"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/information-technology-student-association-sfit/"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="mailto:itsasfitofficial@gmail.com"><i class="fa fa-envelope"></i></a>
            </div>
        </div>
    </footer>
    <script>
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
        const navbarLinks = document.getElementsByClassName('navbar-links')[0]

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
    </script>
    
</body>
</html>