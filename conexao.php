<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "senai_flix";

    $conn = new mysqli("$servername","$username","$password","$dbname");

    if ($conn->connect_error) {
        die("Erro na Conexão". $conn->connect_error);
    }
?>