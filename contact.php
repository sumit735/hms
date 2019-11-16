<?php 
$result = "";
if(isset($_GET['submit'])) {
    $name = $_GET['name'];
    $num = $_GET['num'];
    $msg = $_GET['message'];
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Reborn Events';
    $body = $name."<br>".$num."<br>".$msg;

    if(mail("info.rebornevents@gmail.com", "Support", $body, $headers)) {
        $result = "Thanks For contacting us. we'll get back to you asap";
    } else {
        $result = "Sorry! Something went wrong";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reborn | Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link href="assets/css/main.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="Reborn Event Management">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> Reborn - Event</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a6407bb05d.js" crossorigin="anonymous"></script>
    <!-- Carousel CSS -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        
            body {
                z-index: -1;
                color: #fff;
            }
            #msg {
                width: 280px; 
                height: 75px;
                background-color: #1f1039;
                border: solid 1px #1f1039;
                font-weight: 500;
                color: #ffffff;
            }
    
            #right {
                left: 30%;
            }
            #move {
                margin-top:5px;
            }
            .icon-bar {
          position: fixed;
          top: 50%;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          z-index: 999;
        }
        
        /* Style the icon bar links */
        .icon-bar a {
          display: block;
          text-align: center;
          padding: 16px;
          transition: all 0.3s ease;
          color: white;
          font-size: 20px;
        }
        
        .icon-bar .social {
            background: #07062c;
            border: 2px solid #C9060A;
            border-radius: 5px;
            margin-bottom: 1px;
        }
        
        </style>
</head>
<body style="background-color: #313840; color: #fff;">
        <!-- <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div> -->
            
<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
<div class="container">
    <a class="navbar-brand logo" href="#">
        <img src="assets/img/logo.png" alt="Evento"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="lnr lnr-text-align-right"></span>
    </button>
    <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
        <ul class=" nav navbar-nav menu">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="contact.php">Contact Us</a>
            </li>
        </ul>
    </div>
    </div> 
    </header>
    <!--header end here-->
    <!-- The social media icon bar -->
         <div class="icon-bar">
            <a href="https://www.facebook.com/reborneventbbsr/?ref=bookmarks" target="_blank" class="social"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/reborn_events_/" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCo-dMsf_WO2fELrbE9_7PSw" target="_blank" class="social"><i class="fab fa-youtube"></i></a>
            <a href="#" class="social"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin"></i></a>
          </div>
    <div class="contact-section">
        <div class="inner-width">
            <h1>Get in touch</h1>
            <form action="contact.php" method="get">
                <input type="text" required class="name" name="name" placeholder="enter name" id="">
                <input type="text" required class="num" id="myTextBox" name = "num" placeholder="Phone number here">
                <textarea name="message" required class="message" id="" placeholder="Message" rows="1"></textarea>
                <input type="submit" class="btnc" name="submit" value="Contact  Us">
            </form>
            <?php 
            
                if($result != "") {
                    echo $result;
                }
            
            ?>
        </div>
    </div>


    <script>

    // Restricts input for the given textbox to the given inputFilter.
    function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
        textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
            this.oldValue = this.value;
            this.oldSelectionStart = this.selectionStart;
            this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
            this.value = this.oldValue;
            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        }
        });
    });
    }

    // Restrict input to digits and '.' by using a regular expression filter.
    setInputFilter(document.getElementById("myTextBox"), function(value) {
    return /^\d*\.?\d*$/.test(value);
    });

    $(document).ready(function() {
    $('.image-container').hover(
        function() {
            $('.image-container').not(this).toggleClass('squeeze');
            $(this).toggleClass('stretch');
        }, 
        function() {
            $('.image-container').not(this).toggleClass('squeeze');
            $(this).toggleClass('stretch');
        }
    );});
    $(".show-btn").click(function() {
        $(".sm-menu").fadeToggle("fast");
    });

</script>

    

<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>

</body>
</html>