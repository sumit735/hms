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
    <!-- ========== Meta Tags ========== -->
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
        
        * {
            margin: 0;
            padding: 0;
        }
        #down {
            margin-top: 100px;
        }

        #blk {
            margin: 0;
            background-color: black;
            width: 100%;
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
        span {
            color: #f50136;
        }

        @media screen and (max-width: 600px) {
            
        }
        
        .fbLink {
            color: white;
            text-decoration: none;
            color: #f50136;
            font-size: 16px;
            margin-bottom: 0;
            font-weight: 600;
            text-transform: capitalize;
            -webkit-transition: all ease-in-out 0.4s;
            transition: all ease-in-out 0.4s;
        }
        /* unvisited link */
        .pb100 a:link {
          color: #fff;
        }
        
        /* visited link */
        .pb100 a:visited {
          color: #fff;
        }
        
        /* mouse over link */
        .pb100 a:hover {
          color: #fff;
        }
        
        /* selected link */
        .pb100 a:active {
          color: #fff;
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
    <body>
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
    
    <!--header start here -->
    <header class="header navbar fixed-top navbar-expand-md" id="blk">
        <div class="container" >
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
    
<div class="icon-bar">
    <a href="https://www.facebook.com/reborneventbbsr/?ref=bookmarks" target="_blank" class="social"><i class="fab fa-facebook"></i></a>
    <a href="https://www.instagram.com/reborn_events_/" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com/channel/UCo-dMsf_WO2fELrbE9_7PSw" target="_blank" class="social"><i class="fab fa-youtube"></i></a>
    <a href="#" class="social"><i class="fab fa-twitter"></i></a>
    <a href="#" class="social"><i class="fab fa-linkedin"></i></a>
</div>

<!--speaker section-->
<section class="pb100">
   <div class="container">
       <div class="section_title mb50" id="down">
           <h3 class="title">
              About Us
           </h3>
       </div>
   </div>
   <div class="row justify-content-center no-gutters">
        
       <div class="container" id="wrapper">
           <div class="row">
                <div class="col" id="stack">
                    <img class="img-fluid" src="assets/img/speakers/s13.png" alt="speaker name">
                </div>
                <div class="col mov" id="stack2">
                    <h4><span>Reborn</span> Event</h4>
                    <hr class="line">          
                    <p>Reborn approaches every project with meticulous attention to detail and obsessive precision. Regardless of size and scope, we treat your event like a business with clear strategic goals, defined milestones, and a comprehensive plan to ensure that your event is delivered on time and on budget. At Spark, we put your organization first. We learn about your business, we focus on your challenges, and we plan events to support your goals.</p>
                </div>
           </div>
       </div>
       <div class="container">
           <div class="section_title mb50" id="down">
               <h3 class="title">
                  Our Team
               </h3>
           </div>
       </div>
       
       <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <img src="assets/img/team/t1.png" alt="speaker name">
                        <div class="info_box">
                            <h5 class="name"><a href="https://www.facebook.com/shyamsundar.parida" target="_blank" class="fbLink">Shyam Sundar Parida</a></h5>
                            <p class="position">Event Head</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/team/t2.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name"><a href="https://www.facebook.com/abhijeet.kashyap.5" target="_blank" class="fbLink">Abhijeet Kashyap</a></h5>
                        <p class="position">Creative Head</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/team/t3.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name"><a href="https://www.facebook.com/roshni.tripathy.5" target="_blank" class="fbLink">Roshni Tripathy</a></h5>
                        <p class="position">Public Relation</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/team/t4.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name"><a href="https://www.facebook.com/sourav.nayak.5099" target="_blank" class="fbLink">Sourav Nayak</a></h5>
                        <p class="position">Product Head</p>
                    </div>
                </div>
            </div>
        </div>
       
   </div>
</section>
<!--footer start -->
<footer>
   <div class="container">
       <div class="row justify-content-center">

           <div class="col-md-4 col-12">
               <div class="footer_box">
                   <div class="footer_header">
                       <div class="footer_logo">
                           <img src="assets/img/logo.png" alt="Reborn">
                       </div>
                   </div>
                   <div class="footer_box_body">
                       <p>
                           We wanted to create a company with the experience, skills and knowledge to help any event, no matter how large or how small, fulfill its ultimate potential
                       </p>
                       <ul class="footer_social">
                           <li>
                               <a href="https://www.facebook.com/reborneventbbsr/?ref=bookmarks" target="_blank"><i class="ion-social-facebook"></i></a>
                           </li>
                           <li>
                               <a href="https://www.instagram.com/reborn_events_/" target="_blank"><i class="ion-social-instagram"></i></a>
                           </li>
                           <li>
                               <a href="https://www.youtube.com/channel/UCo-dMsf_WO2fELrbE9_7PSw" target="_blank"><i class="ion-social-youtube"></i></a>
                           </li>
                           <li>
                               <a href="#" target="_blank"><i class="ion-social-linkedin"></i></a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>

           <div class="col-12 col-md-4">
               <div class="footer_box">
                   <div class="footer_header">
                       <h4 class="footer_title">
                           Reach Out
                       </h4>
                   </div>
                   <div class="side footer_box_body">
                           <p>N-6/161,IRC Village</p>
                           <p>Nayapalli, Bhubaneswar</p>
                           <p>+91 8908089692</p>
                       <!-- <ul class="instagram_list">
                           <li>
                               <p>N-6/167</p>
                           </li>
                           <li>
                               <p>N-6/167</p>
                           </li>
                           <li>
                               <p>N-6/167</p>
                           </li>
                           

                           
                       </ul> -->
                   </div>
               </div>
           </div>

           <div class="col-12 col-md-4">
               <div class="footer_box">
                   <div class="footer_header">
                       <h4 class="footer_title">
                           Contact Us
                       </h4>
                   </div>
                   <div class="footer_box_body">
                       <div class="newsletter_form">
                           <form action="index.php" method="get">
                               <input type="text" name="name" required class="form-control" placeholder="name here">
                               <input type="text" required name="num" class="form-control" id="myTextBox" placeholder="Phone number here">
                               <textarea name="message" required id="msg" cols="10" rows="2" placeholder="enter your message"></textarea>
                               <input type="submit" name="submit" value="submit" class="btn btn-rounded btn-block btn-primary">
                           </form>
                           <?php 
                           
                                if($result != "") {
                                    echo $result;
                                }
                           
                           ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</footer>
<div class="copyright_footer">
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-6 col-12">
               <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Reborn pvt ltd
</div>
           <div class="col-12 col-md-6 " id="right">
               <p>All rights reserved | Designed By <a href="https://gvitechnology.com" target="_blank">GVI Technology</a></p>
           </div>
       </div>
   </div>
</div>
<!--footer end -->

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

        
    

</script>
</body>
</html>