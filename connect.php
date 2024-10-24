<?php
    $serverName = "localhost";
    $user = "root";
    $password = "";
    $dbname = "dblaptop";

    $conn = mysqli_connect($serverName, $user, $password, $dbname);

    if(!$conn){
        echo "ket noi that bai";
    }




