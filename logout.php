<?php
    session_start();
    session_destroy();
    
    header('Location: '.$uri.'/zuhause/loggedout.html');
?>