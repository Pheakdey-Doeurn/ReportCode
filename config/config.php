<?php 

define('DB_HOST', 'localhost');
define( 'DB_USER', 'root' );       // set database user    
define( 'DB_PASSWORD', '' );  	// set database password
define ('DB_NAME', 'schooldb');   	// set database name

$conn = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());  
}

?>


