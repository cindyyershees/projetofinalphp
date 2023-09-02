<!DOCTYPE html>
<html>
<head>
    <title>Inserir Paciente</title>
</head>
<body>

<h2>Inserir Paciente</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações do banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = " ";
    $bd = "sisgeresaude";

    // Dados do formulário
    $nomepaciente = $_POST["nome"];
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



    $qry = mysqli_query($con,$sql);

 

    // Consulta para inserir o paciente
    $sql = "INSERT INTO pacientes (nomepaciente	, cpfpaciente, rgpaciente, enderecopaciente, datanascimento, telefone, email, numcartaosus, equipe, nomemae, nomepai, raca, sexo, tiposanguineo, nacionalidade,	statuspac, doencapreexis, detalhesdoenca) 
            VALUES ('$nomepaciente, $cpfpaciente, $rgpaciente, $enderecopaciente, $datanascimento, $telefone, $email, $numcartaosus, $equipe, $nomemae, $nomepai, $raca, $sexo, $tiposanguineo, $nacionalidade, $statuspac, $doencapreexis, $detalhesdoenca')";

if ($qry) {
    header ('location: listarpacientes.php');
} else {
    echo "<h1>Registro não cadastrado</h1>";
}

    

}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" . $id; ?>">

    <label for="nomepaciente">Nome do Paciente:</label>
    <input type="text" id="nomepaciente" name="nomepaciente" required><br><br>
    <label for="cpfpaciente">CPF do Paciente:</label>
    <input type="text" id="cpfpaciente" name="cfpaciente" required><br><br>
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
    <input type="submit" value="Inserir Paciente">

</form>

</body>
</html>
