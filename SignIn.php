<?php
    $email = $pass = '';
    $errors = array('email' => '', 'password' => '');
	if(isset($_POST["email"]))
	{
		$servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "zuhause";  //my db is small lettered (check shared files)
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

		$email = $_POST['email'];
      	$pass = $_POST['password'];
		echo "Email : ". $email;
		echo "<br/>";
		echo "Password : ". $pass;
		echo "<br/>";
        echo 'Connected successfully<br>';
        $sql = $conn->prepare('SELECT name,password FROM user where username = ?'); //Select * is exploitable
        if($sql !== FALSE) 
        {
            $sql->bind_param('s', $email);
        }
        else
        {
            die('prepare() failed: ' . htmlspecialchars($conn->error)); //dev only remove after
            
        }
        $sql->execute();
    
        $sql->store_result();
        
        if ($sql->num_rows > 0) 
        {
            $sql->bind_result($name,$hash);
            $sql->fetch();
            
            echo "Password H: " . $hash. "<br>";
            if (password_verify($pass, $hash)) //verifying password with hashed value
            {
                echo "Name: " . $name. "<br>";
                echo "Password: " . $hash. "<br>";

                session_start();
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['loggedin'] = TRUE;
                
                header("location: index.html");
            } else 
            {
                $errors['password'] = 'Incorrect password or username!';
                echo 'Incorrect password or username! 1';    //wrong password
            }
        } 
        else
        {
            $errors['password'] = 'Incorrect password or username!';
            echo 'Incorrect username or password! 2';    //wrong username  
                                                        //ideally there shouldn't be any difference in the error message to prevent bruteforcing
        }
        $sql->close();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div data-aos="zoom-out-left" data-aos-once="true" class="login-dark" style="background-image:url(&quot;assets/img/image.jpg&quot;);vertical-align: text-top"><img src="assets/img/favicon.png">
        <form method="post" action="SignIn.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" required>
                <div style="color:#ee0505;"><?php echo $errors['password']; ?></div>  
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" name="submit">
                    Log In
                </button>
                <button class="btn btn-primary btn-block" type="submit" style="text-decoration-color: antiquewhite">
                    <a href="selectionscr.html" style="text-decoration:none">Sign Up</a>
                </button>
            </div><a href="#" class="forgot">Forgot your email or password?</a></form>
    
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>

    </body>

</html>