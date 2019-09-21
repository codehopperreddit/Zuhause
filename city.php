<?php
    session_start(); 
    $_SESSION['city'] = $_POST['city'];
	header('Location: '.$uri.'/Zuhause/listing.php');
	
?>
