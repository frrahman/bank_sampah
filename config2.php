<?php 
    /* nama server kita */
    $host = "localhost";

    /* nama database kita */
    $database = "db_hanami"; 

    /* nama user yang terdaftar pada database (default: root) */
    $username = "root";

    /* password yang terdaftar pada database (default : "") */ 
    $password = ""; 

    // membuat koneksi
   // $conn = mysqli_connect($servername, $username, $password, $database);
	
 
	
    return new PDO("mysql:host=$host;dbname=$database", $username, $password, array(
	
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	
    ));

?>
