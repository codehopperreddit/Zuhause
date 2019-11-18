<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans">
    <link rel="stylesheet" href="assets/css/Alex_NavDefault.css">
    <link rel="stylesheet" href="assets/css/Alex_NavDefault1.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="index.php" style="color:#0c0000;font-family:'Work Sans', sans-serif;">Zuhause</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1" style="color:#66d7d7;">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#"></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="listing.html" style="color:#000000;font-style:normal;font-weight:bold;">Properties</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link float-left" data-toggle="dropdown" aria-expanded="false" href="#" style="color:rgba(0,0,0,0.75);font-weight:bold;">Login / Signup</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="signup.html">Sign Up</a><a class="dropdown-item" role="presentation" href="login&signup.html">Login</a></div>
                        </li>
                    </ul>
                    <p class="ml-auto navbar-text actions" style="margin-bottom:7px;float:right;display:block;"><a href="#" class="login" style="color:rgb(254,254,254);font-weight:bold;font-family:'Work Sans', sans-serif;">LOGIN</a> <a class="btn btn-light action-button" role="button" href="#" style="background-color:rgb(1,10,10);">SIGN UP</a></p>
            </div>
    </div>
    </nav>
    </div>
    <div class="contact-clean" style="height:680px;background-color:rgb(2,12,20);">
        <form name="contact" action="contactthanks.php" method="post" style="padding:30px;">
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">Send </button></div>
        </form>
    </div>
    <div class="article-list">
        <div class="container" style="background-color:#ffffff;height:500px;padding:20px;">
            <div class="intro">
                <h2 class="text-center" style="color:rgb(0,0,0);padding:0px;font-family:'Work Sans', sans-serif;">Our Offices</h2>
                <p class="text-center" style="color:rgb(0,0,0);font-family:'Amatic SC', cursive;font-size:30px;"><strong>You can contact us at our offices</strong></p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                    <h3 class="name" style="color:rgb(0,0,0);font-family:'Work Sans', sans-serif;">Kolkata - Headoffice</h3>
                    <p class="description" style="color:rgb(0,13,22);">169/2 DLF Galleria &nbsp;, New Town ,Kolkata:700-109</p>
                    <p class="description" style="color:rgb(0,0,0);">Call us : 7898797477 &nbsp; &nbsp; Email: kolzuause@offices.com</p><a href="#" class="action"></a></div>
                <div class="col-sm-6 col-md-4 item" style="color:rgb(0,3,6);"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                    <h3 class="name" style="color:rgb(0,0,0);font-family:'Work Sans', sans-serif;">Bangalore&nbsp;</h3>
                    <p class="description" style="color:rgb(0,2,3);">78A RT Nagar , Dadita Tech Park</p>
                    <p class="description" style="color:rgb(0,0,0);"><br>Call us : 7898797979 &nbsp; &nbsp; Email: banzuause@offices.com<br><br></p><a href="#" class="action"></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
                    <h3 class="name" style="color:rgb(0,0,0);font-family:'Work Sans', sans-serif;">Pune</h3>
                    <p class="description" style="color:rgb(0,5,7);">3rd and 4th floor of Rajiv Gandhi National Park ,&nbsp;</p>
                    <p class="description" style="color:rgb(0,0,0);"><br>Call us : 9998797979 &nbsp; &nbsp; Email: punzuause@offices.com<br><br></p><a href="#" class="action"></a></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
</body>

</html>