<?php 

$server = "	sql303.epizy.com"; 
$username = "epiz_27685722"; 
$password = " kNf7i0JXKfJrU";
$dbname = "epiz_27685722_mybocuse"; 

$conn = mysqli_connect($server, $username, $password, $dbname); 

if(!conn) {
    die("Connection failed:".mysqli_connect_error()); 
}

?>