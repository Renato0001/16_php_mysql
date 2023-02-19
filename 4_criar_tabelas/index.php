<?php
// Conexão com o banco de dados

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli("$host", "$user", "$pass", "$db");

    //$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

    $q = "DROP TABLE teste";

    $conn->query($q);

    $conn->close();