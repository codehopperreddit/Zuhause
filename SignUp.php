<?php
    
    if(isset($_POST["email"]))
    {
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "Zuhause";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);

//        echo "Name : ". $name. "<br/>";
//        echo "Email : ". $email. "<br/>";
//        echo "Password : ". $pass. "<br/>";

        echo 'Connected successfully<br>';
        $sql = "INSERT INTO user(name, username, password) VALUES('$name', '$email', '$pass')";

        $result = mysqli_query($conn, $sql);
        echo $result. '<br/>';

        if($result){
            echo "New user added successfully";
            header('Location: index.html');
        }
        } else {
            echo 'query error: '. mysqli_error($conn);
        }
?>