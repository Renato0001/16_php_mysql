<?php
// Conexão com o banco de dados

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli("$host", "$user", "$pass", "$db");

    // Verificar se a conexão foi bem sucedida

    $sql = "SELECT * FROM itens";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();