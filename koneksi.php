<?php

$hostname="localhost";
$username="root";
$password = "";
$database_name="artomoro";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    echo "Koneksi pedot";
    die();
}


?>