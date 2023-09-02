<?php
include 'conexao.php';

if (isset($_POST["id"])) {
  
}
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
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
    
        $conexao = mysqli_connect("localhost", "root", "", "sisgeresaude");

        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        $query = "UPDATE pacientes SET nome = '$nomepaciente', cpfpaciente = '$cpfpaciente', rgpaciente = '$rgpaciente', enderecopaciente = '$enderecopaciente', 
        datanascimento = '$datanascimento' , telefone = '$telefone' , email = '$email', numcartaosus = '$numcartaosus', equipe = '$equipe', 
        nomemae = '$nomemae',nomepai = '$nomepai', raca = '$raca', sexo = '$sexo', tiposanguineo = '$tiposanguineo', nacionalidade = '$nacionalidade',
        statuspac = '$statuspac', doencapreexis = '$doencapreexis', detalhesdoenca = '$detalhesdoenca' WHERE id = $id";

        if (mysqli_query($conexao, $query)) {
            echo "Atualizada com sucesso!";
        } else {
            echo "Erro ao atualizar: " . mysqli_error($conexao);
        }

        mysqli_close($conexao);
    } else {
        $conexao = mysqli_connect("localhost", "root", "", "sisgeresaude");
    }
        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

    ?>
            
            <!DOCTYPE html>
            <html>
        
            <head>
                <title>Editar Pacientes</title>
            </head>
            <body>
               
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

                <input type="submit" value = "Atualizar Paciente">
             </form>

            </body>

         </html>

    