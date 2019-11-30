<?php
    $email = $pass = $pass_repeat = '';
    $errors = array('email' => '', 'password' => '', 'password_repeat' => '');
    if(isset($_POST["email"]))
    {
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "Zuhause";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if(! $conn ) 
        {
            die("Connection failed: " . mysqli_error($conn));
        }
        if ($stmt = $conn->prepare('SELECT id FROM user WHERE username = ?')) 
        {
            
            $stmt->bind_param('s', $_POST['email']);
            $stmt->execute();
        
            if ($stmt->num_rows > 0) 
            {
                header('Location: '.$uri.'useralreadyexists.html');
            }
        }
        $email = $_POST['email'];
        $name =$_POST['name'];
        $password = $_POST['password'];
        echo "Name : ". $name. "<br/>";
        echo "Email : ". $email. "<br/>";
        echo "Password : ". $pass. "<br/>";
        echo 'Connected successfully<br>';
        
        //Password hashing start
        $options = [
            'cost' => 12,
                    ];   //salt is added randomly (this is prefered and standard)
        $hash=password_hash($password,PASSWORD_BCRYPT, $options);
        $password="password";//replacing data 
        $sql = $conn->prepare("INSERT INTO user(name, username, password) VALUES(?,?,?)"); //Replaced with prepared staement
                    
        //Please be careful, the password column has to be varchar with atleast 200 size (250 recommended)
        
        if($sql !== FALSE) 
        {
             $sql->bind_param('sss',$name,$email,$hash);
             
        }
        else
        {
            die('prepare() failed: ' . htmlspecialchars($conn->error)); //dev only remove after
            
        }
        
        $sql->execute();    //use execute() for prepared statements
        $sql->close();

        session_start();
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['loggedin'] = TRUE;
        header('Location: index.html');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="register-photo" style="background-image:url(&quot;assets/img/view-of-lisbon-hillside.jpg&quot;);background-size:cover;background-repeat:repeat-x;background-position:top;height:800px;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/laptop-in-modern-office.jpg&quot;);"></div>
            <form method="post" action="SignUp.php" style="background-color:rgb(43,163,230);">
                <h2 class="text-center" style="color:#f1f7fc;"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <input class="form-control" type="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password_repeat" placeholder="Password (repeat)">
                    <div style="color:#ee0505;"><?php echo $errors['password_repeat']; ?></div>                    
                </div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label" style="color:#f7f9fc;">
                        <input class="form-check-input" type="checkbox">I agree to the license terms.</label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" name="submit" type="submit" style="color:#ffffff;">Sign Up</button>
                </div><a href="#" class="already" style="color:#f7f9fc;">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>