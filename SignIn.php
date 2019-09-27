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

//        $email = $_POST["email"];
//		$pass = $_POST["password"];
		$email = mysqli_real_escape_string($conn, $_POST['email']);
      	$pass = mysqli_real_escape_string($conn, $_POST['password']);

		echo "Email : ". $email;
		echo "<br/>";
		echo "Password : ". $pass;
		echo "<br/>";

        echo 'Connected successfully<br>';
        $sql = "SELECT * FROM user where username = '$email' and password = '$pass'";

        $result = mysqli_query($conn, $sql);
      	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//      	$active = $row['active'];
      	$count = mysqli_num_rows($result);

      	echo $count. "<br/>";

        if ($count == 1) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["username"]. "<br>";
               echo "Password: " . $row["password"]. "<br>";
        }
        echo "Logged in successfully <br/>";
        header("location: index.html");
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
     }
     else
     {
     	echo 'Something Wrong.';
     }

//mkm@gmail.com
?>