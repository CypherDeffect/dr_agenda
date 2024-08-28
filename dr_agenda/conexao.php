<?php
$hostname = "localhost";
$bancodedados = "dragenda";
$usuario = "root";
$senha = "root";


// Cria conexão 
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

// Valida se conexão ocorreu com sucesso
if ($mysqli->connect_errno) {
    echo "Falha ao conectar ao banco $bancodedados! (". $mysqli->connect_error.") " . $mysqli->connect_error;

}
?>