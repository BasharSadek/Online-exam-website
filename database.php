<?php

function connToData($query)
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "oes";
    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    $conn->query($query);
    $conn->close();
}


function getFromData($query)
{
    $username = "root";
    $password = "";
    $database = new PDO("mysql:host=localhost; dbname=oes;", $username, $password);

    $sql = $database->prepare($query);
    $sql->execute();
    //$database = null;
    return $sql;
}
