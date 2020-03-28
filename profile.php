<?php
  $check=0;
  session_start();
  if (isset($_SESSION['loggedin'])) 
        {
          $name = $_SESSION['name'];
          $check=1;
        }
  else
  {
    $name ='Guest';       //I choose to split this so that i can add the log out div to be visible only when logged in
  }
 
?>
<html>
    <head>
    <title>Your Profile</title>
        <script>
            
           

        </script>
        <style>
        </style>
    </head>
    <body>
    
                <a class="nav-link" href="#">Hello <?php echo htmlspecialchars($name); ?> </a>

    <?php if($check == 0) 
               {?>
              
                  
                  

                  <p>You are not logged in , log in or create a new </p>
              
              
                <a class="nav-link" href="SignIn.php">SIGN IN</a>
              
              
                    <a class="nav-link" href="SignUp.php">SIGN UP</a>
              
                
               <?php } 
                else
                { ?>
                 
                  
                    

                 
                    
                    <a class="nav-link" href="logout.php">logout</a>
                          
                <?php } ?>

    </body>
</html>