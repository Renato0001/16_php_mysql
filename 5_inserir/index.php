<?php
// Conexão com o banco de dados

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli("$host", "$user", "$pass", "$db");

    // Verificar se a conexão foi bem sucedida

    $table = "itens";
    $nome = "Café";
    $descricao = "Café preto";

    $q = "INSERT INTO $table (nome, price) VALUES ('$nome', '$descricao')";

    $conn->query($q);

    $conn->close();