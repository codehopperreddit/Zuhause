<html>
    <head>
        <title>Has Database access details</title>
        <script>
           

        </script>
    </head> 
    <body>
            <?php
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';

                $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
      
                if(! $conn ) {
                    die('Could not connect: ' . mysqli_error());
                }
                mysqli_select_db($conn,'zuhause');
            ?>
         

    </body>  
</html>