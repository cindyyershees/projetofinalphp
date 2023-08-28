<?php

include "conexao.php";
$id = $_POST ['id'];
$sql = "delete from sisgeresaude where id=".$id;

mysqli_query($con,$sql);
header ('location:listarconsultas.php');