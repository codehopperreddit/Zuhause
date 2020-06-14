<?php
    session_start(); 
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['rate'] = $_POST['rate'];
	header('Location: '.$url.'/Zuhause/listing.php');
	
?>
