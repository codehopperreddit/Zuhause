
<html>
    <head>
        <title>Lists the for sale properties</title>
        <script>
           

        </script>
    </head> 
    <body>
            <?php
            include 'dbaccess.php';
            
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
            
            
             
            mysqli_close($conn);
         ?>
         

    </body>  
</html>