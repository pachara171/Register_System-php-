<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db";

    //Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check Connection
    if (!$conn){
        die("Connecion failed". mysqli_connect_error());
    }


?>