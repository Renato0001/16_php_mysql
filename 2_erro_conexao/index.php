<?php
// Conexão com o banco de dados

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli("$host", "$user", "$pass", "$db");

    if ($conn->connect_error) {
        echo "Erro de conexão: " . $conn->connect_error;
    }