<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="4;url=http://localhost/Zuhause" /> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>typage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="assets/css/Button-thib.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Data-Table2.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    <link rel="stylesheet" href="assets/css/Table-with-search1.css">
</head>

<body>
    
    <?php
        
        $msg = $_POST['message'];

        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject="from ".$email." by ".$name;
        $msg = wordwrap($msg,70);
    
    
        mail("zuhausepropertiesindia+zuhausetestreceive@gmail.com",$subject,$msg);

    ?>
    
    
    <div></div>
    <div class="features-blue">
        <div class="container" data-aos="zoom-out" data-aos-duration="450" data-aos-delay="100" data-aos-once="true">
            <div class="intro">
                <h2 class="text-center">Thanks for contacting</h2>
                <p class="text-center" style="background-color:#ffffff;color:#010000;font-size:18px;"><strong><span style="text-decoration: underline;">Thank You for Reaching Out!</span></strong><br><strong><span style="text-decoration: underline;">            We will get back to you soon</span></strong></p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">Works everywhere</h3>
                    <p class="description">&nbsp;We have people and resources all over the world and only a simple subscription will enable the arsenal fo resources of our to be put for the best use for you</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Always available</h3>
                    <p class="description">We are always open to help you even on Sundays&nbsp;</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Customizable</h3>
                    <p class="description">We take care of our customers and we take your preferences very seriously and make it our top priority&nbsp;</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">Organic</h3>
                    <p class="description">We have monthly food and home service packages with one time pay service .</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Fast</h3>
                    <p class="description">We have a express service that will help you to .anytime anywhere from setting you up and putting all the papers in proper fashion&nbsp;</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Mobile-first</h3>
                    <p class="description">Our Toll free number : 1800 XXX XXXX /YYYY call us anytime in need of any help&nbsp;</p>
                </div>
            </div>
        </div><a class="btn btn-dark btn-block btn-lg flex-wrap m-auto" role="button" href="index.html" style="background-color:rgba(34,97,133,0.11);font-family:ABeeZee, sans-serif;font-size:21px;">Go Back Home &nbsp;?</a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
</body>

</html>