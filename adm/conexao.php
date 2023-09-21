<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bd =  'sisgeresaude';

$con = mysqli_connect($servidor,$usuario,$senha,$bd);
//var_dump(mysqli_connect($servidor,$usuario,$senha,$bd))

if (!$con){
    echo "<h1>Erro na conexão</h1>";
}