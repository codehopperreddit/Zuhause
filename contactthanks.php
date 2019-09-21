<html>
    <head>
        <title>Thanks for contacting</title>
        <meta http-equiv="refresh" content="4;url=http://localhost/Zuhause" /> 
        <script>
           

        </script>
        <style>
            div
            {
                width: 200px;
	            height: 200px;
	            position: absolute;
	            top:0;
	            bottom: 0;
	            left: 0;
	            right: 0;
  	
	            margin: auto;
            }
        </style>
    </head> 
    <body>
     <?php
        
        $msg = $_POST['message'];

        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject="from ".$email." by ".$name;
        $msg = wordwrap($msg,70);
    
    
        mail("zuhausepropertiesindia+zuhausetestreceive@gmail.com",$subject,$msg);

    ?>
         <div>
            <p>Thank You for Reaching Out!</p>
            <p>We will get back to you soon</p>
        </div>

    </body>  
</html>
