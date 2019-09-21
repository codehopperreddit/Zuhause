
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
            
            $sql = 'SELECT house_number, owner_name, rate FROM properties';
            mysqli_select_db($conn,'zuhause');
            $retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
               die('Could not get data: ' . mysqli_error($con));
            }
            
            while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
               echo "House Number :{$row['house_number']}  <br> ".
                  "Owner Name : {$row['owner_name']} <br> ".
                  "Rate Per Month : {$row['rate']} <br> ".
                  "--------------------------------<br>";
            }
            
            echo "Fetched data successfully\n";
            
            mysqli_close($conn);
         ?>
         
    </body>  
</html>