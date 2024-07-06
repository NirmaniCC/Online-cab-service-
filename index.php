<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cab Taxi Reservation System</title>
    <link rel="icon" href="src/images/ourLogo.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="styleSheet" type="text/css" href="styles/homeStyle.css">
</head>


<body>

    <nav class="navbar">
        <img src="src/images/ourLogo.png" class="logo"></li>
        <ul class="navigationBox" id="mobile">
            <li><a class="navLink" href="index.php"> Home</a></li>
            <li><a class="navLink" href="aboutus.php"> About Us</a></li>
            <li><a class="navLink" href="contactus.php"> Contact Us</a></li>
            <li><a class="navLink" href="vehicle.php"> Vehicles</a></li>
            <li><a class="navLink" href="userprofile.php"> Profile</a></li>
            <li><a class="navLink" href="feedback.php"> Feedback</a></li>
            <li class="btn"><a href="finalweb/aftersignup.html" id="registerBtn">Sign up</a></li>
            <li class="btn"><a href="finalweb/login.php" id="loginBtn">Login</a></li>
        </ul>
        <button onclick="getMobileView();" class="btnIcon"><i class="fas fa-bars"></i></button>
    </nav>

    <div class="heading">
        <img src="src/images/ourLogo.png" class="bodyImage" width="300px" height="300px">
        <div>
            <h1>Welcome to <br> CABWAVE! </br> <br> </h1>
            <h3>Ride with ease, Any time, Any where</br></h3>
        </div>
    </div>

    <footer class="footer">
        <ul class="links">
            <li class="footerItem"><a class="footerLink" href="#">T&C</a></li>
            <li class="footerItem"><a class="footerLink" href="#">Privacy&Policy</a></li>
            <li class="footerItem"><a class="footerLink" href="#">Careers</a></li>
        </ul>

        <ul class="socialMedia">
            <li class="footerItem"><a class="footerLinkSocial facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="footerItem"><a class="footerLinkSocial youtube" href="#"><i class="fab fa-youtube"></i></a></li>
            <li class="footerItem"><a class="footerLinkSocial twitter" href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="footerItem"><a class="footerLinkSocial linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </footer>

    <script src="./js/home.js"></script>

</body>

</html>