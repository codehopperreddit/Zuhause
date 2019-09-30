<?php
    
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

//        echo "Name : ". $name. "<br/>";
//        echo "Email : ". $email. "<br/>";
//        echo "Password : ". $pass. "<br/>";

        echo 'Connected successfully<br>';
        
        //Pasword hashing start
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


?>