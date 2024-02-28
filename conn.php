<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "latapi";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if(!$conn){
        die("Koneksi tidak stabil");
    }
?>
