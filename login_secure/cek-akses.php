<?php
	
session_start();
	
if(!isset($_SESSION['browser']) || !isset($_SESSION['ip']) || empty($_SESSION['user'])) {
	
    header("Location: ../../login_secure/login.php");
	
    exit;
	
}
	
 
	
if ($_SESSION['browser'] != md5($_SERVER['HTTP_USER_AGENT']) || $_SESSION['ip'] != $_SERVER['REMOTE_ADDR']) {
	
    header("Location: ../../login_secure/login.php");
	
    exit;
	
}