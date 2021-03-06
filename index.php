<!DOCTYPE html>
<html>
<?php
    session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Desh Infomation Technology</title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="css/mobile-menu.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- Check git -->

<body>
    <div id="main-wrapper">
        <!-- Page Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <div class="uc-mobile-menu-pusher">
            <div class="content-wrapper">
                <nav class="navbar m-menu navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a class="navbar-brand" href="index.html"><img class="logo" src="img/logo.png" alt=""></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                            <!-- <ul class="nav-cta hidden-xs">
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                        class="fa fa-search"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head-search">
                                                <form role="form">
                                                    <!-- Input Group -->
                            <!-- <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Type Something">
                                                        <span class="input-group-btn">
			                                  <button type="submit" class="btn btn-primary">Search</button>
			                                </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                            <ul class="nav navbar-nav navbar-right main-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="#">Branch</a></li>
                                <li><a href="result.php">Result</a></li>
                                <li><a href="courses.php">Courses</a></li>
                                <li><a href="registration.php">Registration</a></li>
                                <!-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Registration
                    <span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="m-menu-content">
                                                <ul class="col-sm-2">
                                                    <li><a href="#">Login</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>-->
                                <?php
                                        if(isset($_SESSION['UserName'])){
                                    ?>
                                    <li><a href="#" class="btn btn-default"><span class="glyphicon glyphicon-off"></span>&nbsp;Logout</a></li>
                                    <?php
                                        }
                                        else{
                                    ?>
                                        <li><a href="contact.php">Any query</a></li>
                                        <?php
                                        }
                                    ?>
                            </ul>
                        </div>
                        <!-- .navbar-collapse -->
                    </div>
                    <!-- .container -->
                </nav>
                <!-- .nav -->
                <div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
                        <li data-target="#x-corp-carousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"> <img src="img/hero-slide-1.jpg" alt="Hero Slide">
                            <div class="carousel-caption">
                                <h1>It′s simple, smart and occasionally magical.</h1>
                                <p>Intrinsicly negotiate corporate synergy rather than user-centric web services. Synergistically transition emerging schemas and.</p>
                            </div>
                        </div>
                        <div class="item"> <img src="img/hero-slide-2.jpg" alt="...">
                            <div class="carousel-caption">
                                <h1>It′s profitable and successful!</h1>
                                <p>Synergistically enhance low-risk high-yield testing procedures with clicks-and-mortar architectures. Compellingly revolutionize future-proof interfaces and.</p>
                            </div>
                        </div>
                        <div class="item"> <img src="img/hero-slide-3.jpg" alt="...">
                            <div class="carousel-caption">
                                <h1>Good solutions for your business!</h1>
                                <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. Continually unleash unique niches after go forward.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a>
                    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a>
                </div>
                <!-- #x-corp-carousel-->
                <section class="x-services ptb-100 gray-bg">
                    <section class="section-title">
                        <div class="container text-center">
                            <h2>What We do</h2> <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span> </div>
                    </section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail clearfix">
                                    <a href="#"><img class="img-responsive" src="img/img-offer-1.jpg" alt="Image"></a>
                                    <div class="caption">
                                        <h3><a href="#">Investment</a></h3>
                                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus odio malesuada ex.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumbnail clearfix">
                                    <a href="#"><img class="img-responsive" src="img/img-offer-2.jpg" alt="Image"></a>
                                    <div class="caption">
                                        <h3><a href="#">Planning</a></h3>
                                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus odio malesuada ex.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail clearfix">
                                    <a href="#"><img class="img-responsive" src="img/img-offer-3.jpg" alt="Image"></a>
                                    <div class="caption">
                                        <h3><a href="#">Analysis</a></h3>
                                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus odio malesuada ex.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumbnail clearfix">
                                    <a href="#"><img class="img-responsive" src="img/img-offer-4.jpg" alt="Image"></a>
                                    <div class="caption">
                                        <h3><a href="#">Banking</a></h3>
                                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus odio malesuada ex.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </section>
                <!-- .x-services -->
                <section class="x-features">
                    <section class="section-title">
                        <div class="container text-center">
                            <h2>Our Mission</h2> <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span> </div>
                    </section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 img-left"> <img class="img-responsive" src="img/img-about.png" alt=""> </div>
                            <div class="col-md-6">
                                <div class="promo-block-wrapper clearfix">
                                    <div class="promo-icon"> <i class="fa fa-line-chart"></i> </div>
                                    <div class="promo-content">
                                        <h3>We teach you how to improve your skills</h3>
                                        <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </div>
                                <!-- /.promo-block-wrapper -->
                                <div class="promo-block-wrapper clearfix">
                                    <div class="promo-icon"> <i class="fa fa-life-ring"></i> </div>
                                    <div class="promo-content">
                                        <h3>We make the technology affordable for you</h3>
                                        <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </div>
                                <!-- /.promo-block-wrapper -->
                                <div class="promo-block-wrapper clearfix">
                                    <div class="promo-icon"> <i class="fa fa-calculator"></i> </div>
                                    <div class="promo-content last-type">
                                        <h3>Seamlessly grow your capital before start a new journey.</h3>
                                        <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </div>
                                <!-- /.promo-block-wrapper -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Gallery -->
                <section class="team ptb-100">
                    <section class="section-title">
                        <div class="container text-center">
                            <h2>Gallery</h2> <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span> </div>
                    </section>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/training_center1.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center"> </figcaption>
                                </figure>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/training_center2.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center"> </figcaption>
                                </figure>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/training_center3.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center"> </figcaption>
                                </figure>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/training_center4.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center"> </figcaption>
                                </figure>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/training_center5.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center"> </figcaption>
                                </figure>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <figure class="thumbnail">
                                    <a href="#"><img src="img/training_center6.jpg" class="img-responsive" alt="Image"></a>
                                    <figcaption class="caption text-center"> </figcaption>
                                </figure>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-lg btn-info see_more">See more...</button>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- .team -->
                <section class="testimonial">
                    <section class="section-title">
                        <div class="container-wrapper text-center text-center-notice">
                            <h2>Notice</h2> <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span> </div>
                    </section>
                    <div class="container">
                        <div class="row notice-row">
                            <a class="list-item" href="#">
                                <div class="col-xs-12 col-sm-8 notice-text"><i class="fa fa-bell fa-fw" aria-hidden="true"></i> &nbsp; &nbsp; 27.10.2016 Special Bus Schedule for UG Admission Test Examination sgsgsgg sgsgsshhshsh</div>
                                <div class="col-xs-12 col-sm-4 time-text">8/11/16 12.30am</div>
                            </a>
                        </div>
                        <div class="row notice-row">
                            <a class="list-item" href="#">
                                <div class="col-xs-12 col-sm-8 notice-text"><i class="fa fa-bell fa-fw" aria-hidden="true"></i> &nbsp; &nbsp; 27.10.2016 Special Bus Schedule for UG Admission Test Examination</div>
                                <div class="col-xs-12 col-sm-4 time-text">8/11/16 12.30am</div>
                            </a>
                        </div>
                        <div class="row notice-row">
                            <a class="list-item" href="#">
                                <div class="col-xs-12 col-sm-8 notice-text"><i class="fa fa-bell fa-fw" aria-hidden="true"></i> &nbsp; &nbsp; Bootstrap 3 truncate long text inside rows of a table in a responsive way</div>
                                <div class="col-xs-12 col-sm-4 time-text">8/11/16 12.30am</div>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-lg btn-info see_more_notice">See more...</button>
                            </div>
                        </div>
                    </div>
                </section>
                <footer class="footer">
                    <!-- Footer Widget Section -->
                    <div class="footer-widget-section">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-sm-4 footer-block">
                                    <div class="footer-widget widget_text">
                                        <p class="footer_text">Our Philosophy</p>
                                        <p class="text-size-20" style="padding-left:5px;"><em>"Make the business of ICT institutes ethically better"</em> </p>
                                        <div class="line">
                                            <p class="footer_text" style="padding-top:25px;">About Us</p>
                                            <div class="col-sm-4">
                                                <a class="image-hover-zoom" href="/"><img src="img/blog-04.jpg" width="130px" height="58px" alt=""></a>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-size-18">We offer training for the directors and instructors of regional branch to develop the students.</p> <a class="text-more-info text-primary-hover" href="/">Read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4 footer-block">
                                    <div class="footer-widget widget_text">
                                        <p class="footer_text">Contact Us Today</p>
                                        <div class="row" style="padding-left:8px;">
                                            <div class="col-sm-12"> <i class="fa fa-map-marker awesome-icon" style="color:#31aae2;font-size: 1.3em" aria-hidden="true"></i>
                                                <div style="display:inline-block;padding-left:8px">
                                                    <p><b>Adress:</b>&nbsp;Dhaka,Bangladesh</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left:8px;">
                                            <div class="col-sm-12"> <i class="fa fa-envelope awesome-icon" style="color:#31aae2;font-size: 1.3em" aria-hidden="true"></i>
                                                <div style="display:inline-block;padding-left:8px">
                                                    <p><a href="mailto:info@deshitbd.com" class="text-primary-hover"><b>E-mail:</b>&nbsp;info@deshitbd.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left:8px;">
                                            <div class="col-sm-12"> <i class="fa fa-phone awesome-icon" style="color:#31aae2;font-size: 1.3em" aria-hidden="true"></i>
                                                <div style="display:inline-block;padding-left:8px">
                                                    <p><b>Phone:</b>&nbsp;0123456789</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4 footer-block last">
                                    <p class="footer_text">Leave a Message</p>
                                    <div class="form-wrapper">
                                        <form class="form-horizontal" action=" " method="" id="contact_form">
                                            <fieldset>
                                                <!-- Form Name -->
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                            <input name="first_name" placeholder="Name" class="form-control" type="text"> </div>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                            <input name="email" placeholder="E-Mail Address" class="form-control" type="text"> </div>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <div class="col-md-12 inputGroupContainer">
                                                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                            <textarea class="form-control" name="comment" placeholder="Message" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-warning pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.col-sm-4 -->
                            </div>
                        </div>
                    </div>
                    <!-- /.Footer Widget Section -->
                    <div class="copyright-section">
                        <div class="container clearfix"> <span class="copytext">Copyright &copy; 2016 | <a href="index.html">Desh Information Technology Ltd.</a> &nbsp;&nbsp;&nbsp;Designed And Developed By: <strong style="color: #31aae2;">#.com</strong></span>
                            <ul class="list-inline pull-right">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="admin-panel.php">Admin Panel</a></li>
                                <li><a href="#">Branch</a></li>
                                <li><a href="result.php">Result</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <!-- .container -->
                    </div>
                    <!-- .copyright-section -->
                </footer>
                <!-- .footer -->
            </div>
            <!-- .content-wrapper -->
        </div>
        <!-- .offcanvas-pusher -->
        <div class="uc-mobile-menu uc-mobile-menu-effect">
            <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="uc-mobile-menu-close-btn">&times;</button>
            <div>
                <div>
                    <ul id="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Branch</a></li>
                        <li><a href="result.php">Result</a></li>
                        <li><a href="courses.php">Courses</a></li>
                        <li><a href="registration.php">Registration</a></li>
                        <li><a href="contact.php">Any query</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- .uc-mobile-menu -->
    </div>
    <!-- #main-wrapper -->
    <!-- Script -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/mobile-menu.js"></script>
    <script src="js/flexSlider/jquery.flexslider-min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
