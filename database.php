<?php
   
    $servername = "localhost";
    $username = "D00249620";
    $password = "hannah123";
    $dbname = "fashion";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    
    
?>