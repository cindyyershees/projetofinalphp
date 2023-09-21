<?php
include 'conexao.php';


$id = $nomepaciente = $cpfpaciente = $rgpaciente = $enderecopaciente = $datanascimento = $telefone = $email = $numcartaosus = $equipe = $nomemae = $nomepai = $raca = $sexo = $tiposanguineo = $nacionalidade = $statuspac = $doencapreexis = $detalhesdoenca = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $nomepaciente = $_POST["nomepaciente"];
    $cpfpaciente = $_POST["cpfpaciente"];
    $rgpaciente = $_POST["rgpaciente"];
    $enderecopaciente = $_POST["enderecopaciente"];
    $datanascimento = $_POST["datanascimento"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $numcartaosus = $_POST["numcartaosus"];
    $equipe = $_POST["equipe"];
    $nomemae = $_POST["nomemae"];
    $nomepai = $_POST["nomepai"];
    $raca = $_POST["raca"];
    $sexo = $_POST["sexo"];
    $tiposanguineo = $_POST["tiposanguineo"];
    $nacionalidade = $_POST["nacionalidade"];
    $statuspac = $_POST["statuspac"];
    $doencapreexis = $_POST["doencapreexis"];
    $detalhesdoenca = $_POST["detalhesdoenca"];

    $conexao = mysqli_connect("localhost", "root", "", "sisgeresaude");

    if (!$conexao) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    $query = "UPDATE pacientes SET nomepaciente = '$nomepaciente', cpfpaciente = '$cpfpaciente', rgpaciente = '$rgpaciente', enderecopaciente = '$enderecopaciente', 
    datanascimento = '$datanascimento', telefone = '$telefone', email = '$email', numcartaosus = '$numcartaosus', equipe = '$equipe', 
    nomemae = '$nomemae', nomepai = '$nomepai', raca = '$raca', sexo = '$sexo', tiposanguineo = '$tiposanguineo', nacionalidade = '$nacionalidade',
    statuspac = '$statuspac', doencapreexis = '$doencapreexis', detalhesdoenca = '$detalhesdoenca' WHERE id = $id";

    if (mysqli_query($conexao, $query)) {
        echo "Atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
} else {
    if (isset($_POST["id"]) && is_numeric($_POST["id"])) {
        $id = (int)$_POST["id"];
        
        $conexao = mysqli_connect("localhost", "root", "", "sisgeresaude");

        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM pacientes WHERE id = $id";
        $resultado = mysqli_query($conexao, $query);

        if ($resultado && $paciente = mysqli_fetch_assoc($resultado)) {
           
            $nomepaciente = $paciente["nomepaciente"];
            $cpfpaciente = $paciente["cpfpaciente"];
            $rgpaciente = $paciente["rgpaciente"];
            $enderecopaciente = $paciente["enderecopaciente"];
            $datanascimento = $paciente["datanascimento"];
            $telefone = $paciente["telefone"];
            $email = $paciente["email"];
            $numcartaosus = $paciente["numcartaosus"];
            $equipe = $paciente["equipe"];
            $nomemae = $paciente["nomemae"];
            $nomepai = $paciente["nomepai"];
            $raca = $paciente["raca"];
            $sexo = $paciente["sexo"];
            $tiposanguineo = $paciente["tiposanguineo"];
            $nacionalidade = $paciente["nacionalidade"];
            $statuspac = $paciente["statuspac"];
            $doencapreexis = $paciente["doencapreexis"];
            $detalhesdoenca = $paciente["detalhesdoenca"];

            mysqli_free_result($resultado);
            mysqli_close($conexao);
        } else {
            echo "Erro ao obter detalhes do paciente.";
        }
    } else {
        echo "ID do paciente não fornecido.";
    }
}
    ?>

      <!DOCTYPE html>
     <html lang="pt-BR">
     <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <title>Editar Paciente</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
        .form-group {

        }
           

        .form-group {

        }

        .form
        
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>

    </head>   
    <body>
           
    <div class="container mt-5">
        <h2>Editar Paciente</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">        
        <input type="hidden" name="id" value="<?php echo $id; ?>">       
         <div class="form-group">        
        <label for="nomepaciente" class="form-label">Nome do Paciente:</label>
        <input type="text" class="form-control" id="nomepaciente" name="nomepaciente" value="<?php echo $nomepaciente; ?>" required>        
        </div>
        <div class="form-group">
        <label for="cpfpaciente">CPF do Paciente:</label> 
        <input type="text" class="form-control" id="cpfpaciente" name="cpfpaciente" value="<?php echo $cpfpaciente; ?>" required> 
         </div>
        <label for="rgpaciente">RG do Paciente:</label>
        <input type="text" class="form-control" id="rgpaciente" name="rgpaciente" value="<?php echo $rgpaciente; ?>" required>
        </div>
        <label for="enderecopaciente">Endereço do Paciente:</label>
        <input type="text" class="form-control" id="enderecopaciente" name="enderecopaciente" value="<?php echo $enderecopaciente;?>" required>
         </div>
        <label for="datanascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" id="datanascimento" name="datanascimento" value="<?php echo $datanascimento; ?>" required>
        </div>    
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>"required>
         </div>  
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
         </div>
        <label for="numcartaosus">Número do Cartão do SUS:</label>
        <input type="text" class="form-control" id="numcartaosus" name="numcartaosus" value="<?php echo $numcartaosus; ?>" required>
         </div>
        <label for="equipe">Equipe:</label>
        <input type="text" class="form-control" id="equipe" name="equipe" value="<?php echo $equipe; ?>" required>
         </div>
        <label for="nomemae">Nome da Mãe:</label>
        <input type="text" class="form-control"  id="nomemae" name="nomemae" value="<?php echo $nomemae; ?>" required>
         </div>
        <label for="nomepai">Nome do Pai:</label>
        <input type="text" class="form-control"  id="nomepai" name="nomepai" value="<?php echo $nomepai; ?>" required>
        </div>   
        <label for="raca">Raça:</label>
        <input type="text" class="form-control"  id="raca" name="raca" value="<?php echo $raca; ?>" required>
        </div>
        <label for="sexo">Sexo:</label>
        <input type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $sexo; ?>" required>
        </div>
        <label for="tiposanguineo">Tipo Sanguíneo:</label>
        <input type="text" class="form-control"  id="tiposanguineo" name="tiposanguineo" value="<?php echo $tiposanguineo; ?>" required>
        </div>
        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" class="form-control"  id="nacionalidade" name="nacionalidade" value="<?php echo $nacionalidade; ?>" required>
        </div>
        <label for="statuspac">Status do Paciente:</label>
        <input type="text" class="form-control"  id="statuspac" name="statuspac" value="<?php echo $statuspac; ?>" required>
        </div>
        <label for="doencapreexis">Doença Preexistente:</label>
        <input type="text" class="form-control"  id="doencapreexis" name="doencapreexis"value="<?php echo $doencapreexis; ?>"required>
        </div>
       <label for="detalhesdoenca">Detalhes da Doença:</label>
       <input type="text" class="form-control"  id="detalhesdoenca" name="detalhesdoenca" value="<?php echo $detalhesdoenca; ?>" required><br><br>
       </div>

            <button type="submit" class="btn btn-warning">Atualizar Paciente</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


