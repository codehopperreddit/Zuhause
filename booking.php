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
 //https://stackoverflow.com/questions/12233406/preventing-session-hijacking
?>
<!DOCTYPE html>
<html>

<head>
    <script>
        var queryString = decodeURIComponent(window.location.search);
        queryString = queryString.substring(1);
        var queries = queryString.split("&");
        for (var i = 0; i < queries.length; i++)
        {       
            document.write(queries[i] + "<br>");
        }
    </script>
</head>

<body>
</body>

</html>