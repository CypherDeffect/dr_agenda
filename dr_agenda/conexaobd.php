<?php
$hostname = "localhost";
$bancodedados = "dragenda";
$usuario = "root";
$senha = "root";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar ao banco $bancodedados! (". $mysqli->connect_error.") " . $mysqli->connect_error;

}