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
        
        
        
        /*$result = mysqli_query($conn, $sql);
      	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      	$active = $row['active'];
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
*/

if ($sql->num_rows > 0) 
{
    $sql->bind_result($name,$hash);
    $sql->fetch();
    
    if (password_verify($pass, $hash)) //verifying password with hashed value
    {
        echo "Name: " . $name. "<br>";
        echo "Password: " . $hash. "<br>";
    } else 
    {
        echo 'Incorrect password or username!';    //wrong password
    }
} 
else 
{
    echo 'Incorrect username or password!';    //wrong username  
                                                //ideally there shouldn't be any difference in the error message to prevent bruteforcing
}
$sql->close();

?>