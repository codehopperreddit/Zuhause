<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <title>Listing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almendra+SC">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script>
      function reload()
      {
         //find a better way to do this
         document.forms.chcity.submit();
        
      }
      </script>
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="index.php">Zuhause</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <form  name="chcity" action="/ZuhauseE/city.php" method="post">
                      <select name="city" onchange="reload()">
                          <option disabled selected value> -- select an option -- </option>
                          <option value="kolkata">Kolkata</option>
                          <option value="bangalore">Bangalore</option>
                          <option value="pune">Pune</option>
                      </select>
                      <select name="rate" onchange="reload()">
                          <option disabled selected value> -- select an option -- </option>
                          <option value=10000>10000</option>
                          <option value=20000>20000</option>
                      </select> 
                      
                  </form>
                    <span class="navbar-text actions"> <a href="SignIn.php" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="signup.">Sign Up</a></span></div>
            </div>
        </nav>
    </div><div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<?php 
      include 'dbaccess.php';
      $city="";
      $rate="";
      session_start(); 
      if(isset($_SESSION['city'])) 
        $city=$_SESSION['city'];
      if(isset($_SESSION['rate'])) 
        $rate=$_SESSION['rate'];
      echo $city;
        echo " + ";
        echo $rate, ";";
     
        $sql =$conn->prepare('SELECT id,house_name,details,house_owner,rate FROM properties WHERE city=? or rate<? ');
      
        

        if($sql !== FALSE) {
          $sql->bind_param('ss', $city, $rate);
        }
        else
        {
            die('prepare() failed: ' . htmlspecialchars($conn->error));
        
        }
      
      $sql->execute();
      $retval =$sql->get_result();
      
      if(! $retval ) 
      {
         die('Could not get data: '.mysqli_error($conn));
      }
      
     
         
     
      
      
     ?>
    

<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>#</th>
      <th class="col-md-5 col-xs-5">House Name</th>
      <th class="col-md-4 col-xs-4">Details</th>
      <th class="col-md-3 col-xs-3">Owner Name</th>
      <th class="col-md-2 col-xs-2">Rate</th>
    </tr>
    
  </thead>
  <tbody>
    <?php
    $c=0;
     while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
    ?>
    <tr>
      <th scope="row">><?php echo ++$c;?></th>
      <td><?php echo $row['house_name']; ?></td>
      <td><?php echo $row['details']; ?></td>
      <td><?php echo $row['house_owner']; ?></td>
      <td><?php echo $row['rate']; ?></td>
      <td> <a class="brand-text" href="details.php?id=<?php echo $row['id'] ?>">more info</a> </td>
    </tr>
    
    <?php
       }
    ?>
  </tbody>
</table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>

    <?php 
      $sql->close();
      mysqli_close($conn);

?>
</body>

</html>