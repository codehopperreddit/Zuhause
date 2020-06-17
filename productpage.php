<!DOCTYPE html>
<?php
    //Page still needs a lot of work  in placement 
   $housename = ( isset($_GET['id']) ) ? $_GET['id'] : NULL; //put a redirect here to the listing page in place of NULL
   $housename=substr($housename,1,-1); //strips the escape characters, for some reason its not removed normally
   include 'dbaccess.php';

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
      
      if(! $conn ) {
         die('Could not connect: ' . mysqli_error());
      }
      mysqli_select_db($conn,'zuhause');
       
        $sql =$conn->prepare('SELECT details,house_owner,rate FROM properties WHERE house_name=? ');
      
      
       if($sql !== FALSE) {
       $sql->bind_param('s',$housename);
        
       }
        else 
        {
           die('prepare() failed: ' . htmlspecialchars($conn->error));
        
}
    $sql->execute();
      $retval =$sql->get_result();
      
      if(! $retval ) 
      {
         die('Could not get data: '.mysqli_error($conn));
      }
      $row = $retval-> fetch_array(MYSQLI_NUM);
 
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="assets/css/Button-thib.css">
    <link rel="stylesheet" href="assets/css/dh-row-quote-bg-color.css">
    <link rel="stylesheet" href="assets/css/Feedback-Form-V21.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/GradeJS-the-preview-image-do-not-reflect-the-effect.css">
    <link rel="stylesheet" href="assets/css/Navbar-Fixed-Side.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/Product-Details.css">
    <link rel="stylesheet" href="assets/css/Review-rating-Star-Review-Button.css">
    <link rel="stylesheet" href="assets/css/Review-rating-Star-Review-Button1.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="index.php"><span  style="color:rgb(221,221,221);">Zuhause&nbsp;</span> </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color:#ffffff;background-image:url(&quot;assets/img/11-00-14-phone-1459521079865_big.png&quot;);">
                <ul class="nav navbar-nav nav-right">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home Page</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Properties</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="services.html">Price Packages</a><a class="dropdown-item" role="presentation" href="#">Order Services</a><a class="dropdown-item" role="presentation" href="#">Customer Request</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="faq.html" style="background-color:#b6c9d5;">Customer Care&nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.php">contact </a></li>
                </ul>
                <p class="ml-auto navbar-text actions"><a href="SignIn.php" class="login" style="color:rgb(0,0,0);">Log In</a> <a class="btn btn-light action-button" role="button" href="SignUp.php" style="background-color:#ff0d0d;color:rgba(255,255,255,0.9);font-size:16px;">Sign Up</a></p>
        </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center">Product Details</h1>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12"><img class="img-thumbnail img-fluid center-block" src="assets/img/videomicme.png"></div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6"><img class="img-thumbnail img-fluid center-block" src="assets/img/videomic-me.gif"></div>
                    <div class="col-6 col-sm-6 col-md-6"><img class="img-thumbnail img-fluid center-block" src="assets/img/videomic-me.gif"></div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6"><img class="img-thumbnail img-fluid center-block" src="assets/img/videomic-me.gif"></div>
                    <div class="col-6 col-sm-6 col-md-6"><img class="img-thumbnail img-fluid center-block" src="assets/img/videomic-me.gif"></div>
                </div>
            </div>
            <div class="col-md-5">
                <h1>FLAT NAME : <?php echo $housename; ?></h1>
                <p> <?php echo $row[0]; ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin elit massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris malesuada rutrum magna. Phasellus maximus
                    nunc eget massa euismod bibendum. Phasellus justo felis, porttitor nec justo eu, vestibulum ultrices neque. Maecenas iaculis euismod tempor. Cras vel pellentesque nunc. Sed sit amet convallis dolor, eget dictum elit. Donec ut justo
                    arcu. Vivamus tincidunt nibh ac sem lobortis semper. Cras vulputate mattis euismod. Morbi accumsan leo in leo condimentum, tincidunt pretium dui scelerisque. Morbi mi dui, vehicula vel velit eget, mattis bibendum lectus. Integer iaculis
                    libero at arcu laoreet aliquam. Cras at libero sapien. Sed luctus erat sit amet est hendrerit faucibus. </p>
                <h2 class="text-center text-success"> Rs <?php echo $row[2]; ?></h2><button class="btn btn-danger btn-lg center-block" type="button"><i class="fa fa-cart-plus"></i> Add to Cart</button>
                <button type="button" class="btn btn-primary" id="van-but" onclick="changer()">Book Now! </button>

               
                
                </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-custom">
            <div class="col">
                <h1 class="text-center" style="margin:4px;">Review</h1>
                <h3 class="text-danger">&nbsp; &nbsp; &nbsp; &nbsp; Give us your feedback</h3>
                <div class="form-group"><label>E-mail </label></div><input type="text" name="email" style="padding:1px;width:198px;margin:0px;">
                <form>
                    <div class="form-group"><label>Subject </label><input class="form-control" type="text" name="subject"></div>
                    <div class="form-group"><label>Feedback </label><textarea class="form-control" rows="12" name="feedback"></textarea></div><button class="btn btn-success btn-block" type="submit">SUBMIT </button><button class="btn btn-danger btn-block center-block" type="reset">RESET </button></form>
            </div>
        </div>
    </div>
    <div class="container-fluid"><a class="btn btn-primary btn-lg" role="button" href="http://www.earlytime.io" style="padding:9px;margin:4px;width:203px;background-color:rgb(1,12,23);font-size:21px;"><i class="fa fa-star-o"></i>&nbsp;Rating &nbsp; &nbsp;4.5 / 5.0</a></div>
    <div class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Top Reviews&nbsp;</h2>
                <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/1.jpg">
                        <h5 class="name">Ben Johnson</h5>
                        <p class="title">CEO of Company Inc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/3.jpg">
                        <h5 class="name">Carl Kent</h5>
                        <p class="title">Founder of Style Co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/2.jpg">
                        <h5 class="name">Emily Clark</h5>
                        <p class="title">Owner of Creative Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-clean" style="background-color:rgb(23,27,44);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center"><i class="fa fa-quote-left"></i> </h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis mauris accumsan, aliquet dui vel, rutrum dolor. Nunc vitae auctor metus. <strong>Quisque posuere nibh ut sem tincidunt</strong>, quis feugiat elit lobortis. Sed ut fringilla
                    purus. Suspendisse volutpat ex non sem vehicula venenatis ut sed purus. </p>
            </div>
            <div class="buttons"></div>
        </div>
    </div>
    <div class="container">
        <div class="row"></div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3 style="font-size:19px;font-family:'Roboto Slab', serif;">ZUHAUSE PROPERTIES AND REAL ESTATE PVT LTD&nbsp;</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">ZUHAUSE © 2019</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/GradeJS-the-preview-image-do-not-reflect-the-effect.js"></script>
    <script src="assets/js/GradeJS-the-preview-image-do-not-reflect-the-effect1.js"></script>
    <script src="assets/js/Review-rating-Star-Review-Button.js"></script>
    <script src="butalt.js"></script>
</body>

<?php 
      $sql->close();
      mysqli_close($conn);

?>

</html>