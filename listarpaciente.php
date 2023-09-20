<?php
include "conexao.php";
$sql = "select * from pacientes";
$qry = mysqli_query($con,$sql);
//var_dump($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica da Família Amelia King</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Listar Pacientes</h1>
    <hr>
    <?php

    while ($linha = mysqli_fetch_array($qry)){
        $id=$linha['id'];
        echo $linha['id']."<br>";
        echo "Nome do Paciente:".$linha ['nomepaciente']."<br><br>";
        echo "CPF do Paciente:" .$linha ['cpfpaciente']."<br><br>";
        echo "Endereço:" .$linha ['enderecopaciente']."<br><br>";
        echo "Data de nascimento:" .$linha ['datanascimento']."<br><br>";
        echo "Telefone:" .$linha ['telefone']."<br><br>";
        echo "Email:" .$linha ['email']."<br><br>";
        echo "Número do Cartão do Sus:" .$linha ['numcartaosus']."<br><br>";
        echo "Equipe:" .$linha ['equipe']."<br><br>";
        echo "Nome da Mãe:" .$linha ['nomemae']."<br><br>";
        echo "Nome do Pai:" .$linha ['nomepai']."<br><br>";
        echo "Raça:"  .$linha ['raca']."<br><br>";
        echo "Sexo:"  .$linha ['sexo']."<br><br>";
        echo "Nacionalidade:"  .$linha ['nacionalidade']."<br><br>";
        echo "Status do Paciente:"  .$linha ['statuspac']."<br><br>";
        echo "Doença Preexistente:" .$linha ["doencapreexis"]. "<br><br>";
        echo " Detalhes da Doença:" .$linha ['detalhesdoenca']. "<br><br>";
        echo "<a href='editarpaciente.php?id={$id}'>Editar</a>"."<br><br>";
        echo "<a href='deletarpaciente.php?id={$id}'>Deletar</a>";
        echo "<hr>";
          
    }
    ?>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>