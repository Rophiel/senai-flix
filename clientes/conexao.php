<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "senaiflix_gabriel";

    $conn = new mysqli("$servername","$username","$password","$dbname");

    if ($conn->connect_error) {
        die("Erro na Conexão". $conn->connect_error);
    }
?>