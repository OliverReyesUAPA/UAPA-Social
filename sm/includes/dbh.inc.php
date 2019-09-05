<?php
    //Copyright by Oliver Reyes ©2019
    $servername = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "sn";

    $conn = mysqli_connect($servername, $dbUserName, $dbPassword, $dbName);

    if(!$conn)
    {
        die('connection failed: '.mysqli_connect_error());
    }