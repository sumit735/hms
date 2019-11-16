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
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
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
        
    </style>
    </head>
    <body>
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
    
    <!--header start here -->
    <header class="header navbar fixed-top navbar-expand-md"id="blk">
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
    


<!--speaker section-->
<section class="pb100">
    <div class="container">
        <div class="section_title mb50" id="down">
            <h3 class="title">
                View Gallery
            </h3>
        </div>
    </div>
   <div class="row justify-content-center no-gutters baguetteBoxOne gallery">
        
        <?php 

            if($_GET['cat'] == "corporate") {

            ?>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp5.webp">
                            <img src="assets/img/speakers/corporate/corp5.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp7.webp">
                            <img src="assets/img/speakers/corporate/corp7.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp13.jpg">
                            <img src="assets/img/speakers/corporate/corp13.jpg" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp15.jpg">
                            <img src="assets/img/speakers/corporate/corp15.jpg" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp24.jpg">
                            <img src="assets/img/speakers/corporate/corp24.jpg" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp29.webp">
                            <img src="assets/img/speakers/corporate/corp29.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp32.webp">
                            <img src="assets/img/speakers/corporate/corp32.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp36.webp">
                            <img src="assets/img/speakers/corporate/corp36.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp37.webp">
                            <img src="assets/img/speakers/corporate/corp37.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp38.webp">
                            <img src="assets/img/speakers/corporate/corp38.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corporate/corp39.webp">
                            <img src="assets/img/speakers/corporate/corp39.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp40.webp">
                            <img src="assets/img/speakers/corporate/corp40.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp41.webp">
                            <img src="assets/img/speakers/corporate/corp41.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp42.webp">
                            <img src="assets/img/speakers/corporate/corp42.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp43.webp">
                            <img src="assets/img/speakers/corporate/corp43.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp3.webp">
                            <img src="assets/img/speakers/corporate/corp3.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php 

        } elseif($_GET['cat'] == "wedding") {

// wedding section

        ?>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed1.webp">
                        <img src="assets/img/speakers/wedding/wed1.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed2.webp">
                        <img src="assets/img/speakers/wedding/wed2.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed3.webp">
                        <img src="assets/img/speakers/wedding/wed3.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed4.webp">
                        <img src="assets/img/speakers/wedding/wed4.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed5.webp">
                        <img src="assets/img/speakers/wedding/wed5.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed6.webp">
                        <img src="assets/img/speakers/wedding/wed6.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed7.webp">
                        <img src="assets/img/speakers/wedding/wed7.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed8.webp">
                        <img src="assets/img/speakers/wedding/wed8.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed9.webp">
                        <img src="assets/img/speakers/wedding/wed9.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed10.webp">
                        <img src="assets/img/speakers/wedding/wed10.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed11.webp">
                        <img src="assets/img/speakers/wedding/wed11.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed12.webp">
                        <img src="assets/img/speakers/wedding/wed12.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed13.webp">
                        <img src="assets/img/speakers/wedding/wed13.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed14.webp">
                        <img src="assets/img/speakers/wedding/wed14.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed15.webp">
                        <img src="assets/img/speakers/wedding/wed15.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed16.webp">
                        <img src="assets/img/speakers/wedding/wed16.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed17.webp">
                        <img src="assets/img/speakers/wedding/wed17.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed18.webp">
                        <img src="assets/img/speakers/wedding/wed18.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed19.webp">
                        <img src="assets/img/speakers/wedding/wed19.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed20.webp">
                        <img src="assets/img/speakers/wedding/wed20.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed21.webp">
                        <img src="assets/img/speakers/wedding/wed21.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed22.webp">
                        <img src="assets/img/speakers/wedding/wed22.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed23.webp">
                        <img src="assets/img/speakers/wedding/wed23.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed24.webp">
                        <img src="assets/img/speakers/wedding/wed24.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed25.webp">
                        <img src="assets/img/speakers/wedding/wed25.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed26.webp">
                        <img src="assets/img/speakers/wedding/wed26.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed27.webp">
                        <img src="assets/img/speakers/wedding/wed27.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/wedding/wed28.webp">
                        <img src="assets/img/speakers/wedding/wed28.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <?php } 

        elseif($_GET['cat'] == "birthday") {



        ?>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed1.webp">
                        <img src="assets/img/speakers/birthday/wed1.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed2.webp">
                        <img src="assets/img/speakers/birthday/wed2.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div> -->
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed3.webp">
                        <img src="assets/img/speakers/birthday/wed3.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed4.webp">
                        <img src="assets/img/speakers/birthday/wed4.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed5.webp">
                        <img src="assets/img/speakers/birthday/wed5.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed6.webp">
                        <img src="assets/img/speakers/birthday/wed6.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed7.webp">
                        <img src="assets/img/speakers/birthday/wed7.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div> -->
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed8.webp">
                        <img src="assets/img/speakers/birthday/wed8.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed9.webp">
                        <img src="assets/img/speakers/birthday/wed9.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed10.webp">
                        <img src="assets/img/speakers/birthday/wed10.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div> -->
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed11.webp">
                        <img src="assets/img/speakers/birthday/wed11.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed12.webp">
                        <img src="assets/img/speakers/birthday/wed12.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed13.webp">
                        <img src="assets/img/speakers/birthday/wed13.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed14.webp">
                        <img src="assets/img/speakers/birthday/wed14.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div> -->
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed15.webp">
                        <img src="assets/img/speakers/birthday/wed15.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed16.webp">
                        <img src="assets/img/speakers/birthday/wed16.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed17.webp">
                        <img src="assets/img/speakers/birthday/wed17.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed18.webp">
                        <img src="assets/img/speakers/birthday/wed18.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed19.webp">
                        <img src="assets/img/speakers/birthday/wed19.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed20.webp">
                        <img src="assets/img/speakers/birthday/wed20.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div> -->
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed21.webp">
                        <img src="assets/img/speakers/birthday/wed21.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed22.webp">
                        <img src="assets/img/speakers/birthday/wed22.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed23.webp">
                        <img src="assets/img/speakers/birthday/wed23.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div> -->
        <!-- <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed24.webp">
                        <img src="assets/img/speakers/birthday/wed24.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div> -->
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed25.webp">
                        <img src="assets/img/speakers/birthday/wed25.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed26.webp">
                        <img src="assets/img/speakers/birthday/wed26.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div> -->
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed27.webp">
                        <img src="assets/img/speakers/birthday/wed27.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <a href="assets/img/speakers/birthday/wed28.webp">
                        <img src="assets/img/speakers/birthday/wed28.webp" class="img-thumbnail" width="32%" alt="">
                    </a>
                </div>
            </div>
        </div>
        <?php } 
        elseif($_GET['cat'] == "promotion") {

        ?>
        <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp32.webp">
                            <img src="assets/img/speakers/corporate/corp32.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp36.webp">
                            <img src="assets/img/speakers/corporate/corp36.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp37.webp">
                            <img src="assets/img/speakers/corporate/corp37.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp38.webp">
                            <img src="assets/img/speakers/corporate/corp38.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corporate/corp39.webp">
                            <img src="assets/img/speakers/corporate/corp39.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp40.webp">
                            <img src="assets/img/speakers/corporate/corp40.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp41.webp">
                            <img src="assets/img/speakers/corporate/corp41.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp42.webp">
                            <img src="assets/img/speakers/corporate/corp42.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp43.webp">
                            <img src="assets/img/speakers/corporate/corp43.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div> -->
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <a href="assets/img/speakers/corporate/corp3.webp">
                            <img src="assets/img/speakers/corporate/corp3.webp" class="img-thumbnail" width="32%" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
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
                               <a href="https://www.facebook.com/abhijeet.kashyap.5" target="_blank"><i class="ion-social-facebook"></i></a>
                           </li>
                           <li>
                               <a href="https://www.facebook.com/roshni.tripathy.5" target="_blank"><i class="ion-social-facebook"></i></a>
                           </li>
                           <li>
                               <a href="https://www.facebook.com/sourav.nayak.5099" target="_blank"><i class="ion-social-facebook"></i></a>
                           </li>
                           <li>
                               <a href="https://www.facebook.com/shyamsundar.parida" target="_blank"><i class="ion-social-facebook"></i></a>
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
                           <input type="text" required class="form-control" placeholder="name here">
                           <input type="text" required class="form-control" id="myTextBox" pattern="[0-9]" placeholder="Phone number here">
                           <textarea name="text" required id="msg" cols="10" rows="2" placeholder="enter your message"></textarea>
                           <button class="btn btn-rounded btn-block btn-primary">SUBMIT</button>
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
<script src="assets/js/baguetteBox.min.js"></script>
<script>
    $(document).ready(function(){
		baguetteBox.run('.baguetteBoxOne');
	});

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