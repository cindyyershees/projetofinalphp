<!DOCTYPE html>
<html>
<head>
    <title>Inserir Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2 class="mt-5">Inserir Paciente</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servidor = "localhost";
        $usuario = "root";
        $senha = ""; 
        $bd = "sisgeresaude";

        // Conexão com o banco de dados
        $con = mysqli_connect($servidor, $usuario, $senha, $bd);

        if (!$con) {
            die("Conexão falhou: " . mysqli_connect_error());
        }

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

        // Consulta para inserir o paciente
        $sql = "INSERT INTO pacientes (nomepaciente, cpfpaciente, rgpaciente, enderecopaciente, datanascimento, telefone, email, numcartaosus, equipe, nomemae, nomepai, raca, sexo, tiposanguineo, nacionalidade, statuspac, doencapreexis, detalhesdoenca) 
                VALUES ('$nomepaciente', '$cpfpaciente', '$rgpaciente', '$enderecopaciente', '$datanascimento', '$telefone', '$email', '$numcartaosus', '$equipe', '$nomemae', '$nomepai', '$raca', '$sexo', '$tiposanguineo', '$nacionalidade', '$statuspac', '$doencapreexis', '$detalhesdoenca')";

        if (mysqli_query($con, $sql)) {
            echo "<div class='alert alert-success mt-3' role='alert'>Registro cadastrado com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3' role='alert'>Erro ao cadastrar o registro: " . mysqli_error($con) . "</div>";
        }

        mysqli_close($con);
    }
    ?>

    <form class="mt-5" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="nomepaciente">Nome do Paciente:</label>
    <input type="text" id="nomepaciente" name="nomepaciente" required><br><br>
    <label for="cpfpaciente">CPF do Paciente:</label>
    <input type="text" id="cpfpaciente" name="cpfpaciente" required><br><br>
    <label for="rgpaciente">RG do Paciente:</label>
    <input type="text" id="rgpaciente" name="rgpaciente" required><br><br>
    <label for="enderecopaciente">Endereço do Paciente:</label>
    <input type="text" id="enderecopaciente" name="enderecopaciente" required><br><br>
    <label for="datanascimento">Data de Nascimento:</label>
    <input type="date" id="datanascimento" name="datanascimento" required><br><br>
    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="numcartaosus">Número do Cartão do SUS:</label>
    <input type="text" id="numcartaosus" name="numcartaosus" required><br><br>
    <label for="equipe">Equipe:</label>
    <input type="text" tid="equipe" name="equipe" required><br><br>
    <label for="nomemae">Nome da Mãe:</label>
    <input type="text" id="nomemae" name="nomemae" required><br><br>
    <label for="nomepai">Nome do Pai:</label>
    <input type="text" id="nomepai" name="nomepai" required><br><br>
    <label for="raca">Raça:</label>
    <input type="text" id="raca" name="raca" required><br><br>
    <label for="sexo">Sexo:</label>
    <input type="text" id="sexo" name="sexo" required><br><br>
    <label for="tiposanguineo">Tipo Sanguíneo:</label>
    <input type="text" id="tiposanguineo" name="tiposanguineo" required><br><br>
    <label for="nacionalidade">Nacionalidade:</label>
    <input type="text" id="nacionalidade" name="nacionalidade" required><br><br>
    <label for="statuspac">Status do Paciente:</label>
    <input type="text" id="statuspac" name="statuspac" required><br><br>
    <label for="doencapreexis">Doença Preexistente:</label>
    <input type="text" id="doencapreexis" name="doencapreexis" required><br><br>
    <label for="detalhesdoenca">Detalhes da Doença:</label>
    <input type="text" id="detalhesdoenca" name="detalhesdoenca" required><br><br>

        <button type="submit" class="btn btn-primary">Inserir Paciente</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
