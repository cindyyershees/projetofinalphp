<?php
include 'conexao.php';

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
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $conexao = mysqli_connect("localhost", "root", "", "sisgeresaude");

        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM pacientes WHERE id = $id";
        $resultado = mysqli_query($conexao, $query);

        if ($resultado && $paciente = mysqli_fetch_assoc($resultado)) {
            // Usar os dados do paciente para preencher o formulário
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
<html>

<head>
    <title>Editar Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <label for="nomepaciente">Nome do Paciente:</label>
        <input type="text" id="nomepaciente" name="nomepaciente" value="<?php echo $nomepaciente; ?>" required><br><br>
        <label for="cpfpaciente">CPF do Paciente:</label>
        <input type="text" id="cpfpaciente" name="cpfpaciente" value="<?php echo $cpfpaciente; ?>" required><br><br>
        <label for="rgpaciente">RG do Paciente:</label>
        <input type="text" id="rgpaciente" name="rgpaciente" value="<?php echo $rgpaciente; ?>" required><br><br>
        <label for="enderecopaciente">Endereço do Paciente:</label>
        <input type="text" id="enderecopaciente" name="enderecopaciente" value="<?php echo $enderecopaciente;?>" required><br><br>
        <label for="datanascimento">Data de Nascimento:</label>
        <input type="date" id="datanascimento" name="datanascimento" value="<?php echo $rgpaciente; ?>" required><br><br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="<?php echo $telefone; ?>" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br>
        <label for="numcartaosus">Número do Cartão do SUS:</label>
        <input type="text" id="numcartaosus" name="numcartaosus" value="<?php echo $numcartaosus; ?>" required><br><br>
        <label for="equipe">Equipe:</label>
        <input type="text" tid="equipe" name="equipe" value="<?php echo $equipe; ?>" required><br><br>
        <label for="nomemae">Nome da Mãe:</label>
        <input type="text" id="nomemae" name="nomemae" value="<?php echo $nomemae; ?>" required><br><br>
        <label for="nomepai">Nome do Pai:</label>
        <input type="text" id="nomepai" name="nomepai" value="<?php echo $nomepai; ?>" required><br><br>
        <label for="raca">Raça:</label>
        <input type="text" id="raca" name="raca" value="<?php echo $raca; ?>" required><br><br>
        <label for="sexo">Sexo:</label>
        <input type="text" id="sexo" name="sexo" value="<?php echo $sexo; ?>" required><br><br>
        <label for="tiposanguineo">Tipo Sanguíneo:</label>
        <input type="text" id="tiposanguineo" name="tiposanguineo" value="<?php echo $tiposanguineo; ?>" required><br><br>
        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" id="nacionalidade" name="nacionalidade" value="<?php echo $nacionalidade; ?>" required><br><br>
        <label for="statuspac">Status do Paciente:</label>
        <input type="text" id="statuspac" name="statuspac" value="<?php echo $statuspac; ?>" required><br><br>
        <label for="doencapreexis">Doença Preexistente:</label>
        <input type="text" id="doencapreexis" name="doencapreexis"value="<?php echo $doencapreexis; ?>" required><br><br>
       <label for="detalhesdoenca">Detalhes da Doença:</label>
       <input type="text" id="detalhesdoenca" name="detalhesdoenca" value="<?php echo $detalhesdoenca; ?>" required><br><br>

         <button type="submit" class="btn btn-warning">Atualizar Paciente</button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
