<?php

$servidor = "45.152.44.103";
$usuario = "u358437276_athena";
$senha = "Athena123";
$dbname = "u358437276_athena";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
mysqli_set_charset($conn,"utf8");
date_default_timezone_set('America/Sao_Paulo');
if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
}else{
    //echo "Conexao realizada com sucesso";
}  ;



?>