<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Clínica da Família Amelia King</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            padding: 20px;
        }
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-container label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-container input, .form-container select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
<div class="form-container">
        <h2 class="mt-5">Inserir Paciente</h2
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

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="nomepaciente">Nome do Paciente:</label>
            <input type="text" id="nomepaciente" name="nomepaciente" required><br><br>
            <label for="cpfpaciente">CPF do Paciente:</label>
            <input type="text" id="cpfpaciente" name="cpfpaciente" required><br><br>
            <label for="rgpaciente">RG do Paciente:</label>
            <input type="text" id="rgpaciente" name="rgpaciente" required><br><br>
            <label for="enderecopaciente">Endereço do Paciente:</label>
            <input type="text" id="enderecopaciente" name="enderecopaciente" required><br><br>
            <label for="numero">Número da Casa:</label>
            <input type="text" id="numero" name="numero" pattern="\d+" title="Digite apenas números" required><br><br>
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" required><br><br>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required><br><br>
            <label for="pais">País:</label>
            <input type="text" id="pais" name="pais" required><br><br>
            <div class="mb-3">
                <label for="datanascimento">Data de Nascimento:</label>
                <input type="date" id="datanascimento" name="datanascimento" pattern="\d{2}/\d{2}/\d{4}" title="Informe uma data no formato dd/mm/aaaa" required><br><br>
            </div>
            <label for="ddd">DDD:</label>
            <input type="number" id="ddd" name="ddd" min="10" max="99" title="Digite exatamente 2 dígitos para o DDD" required><br><br>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" pattern="\d{8,9}" title="Digite de 8 a 9 dígitos para o telefone" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required><br><br>
            <label for="numcartaosus">Número do Cartão do SUS:</label>
            <input type="text" id="numcartaosus" name="numcartaosus" required><br><br>
            <div class="mb-3">
                <label for="equipe">Equipe:</label>
                <select id="equipe" name="equipe" class="form-select" required>
                    <option value="Asteca">Asteca</option>
                    <option value="Dumont">Dumont</option>
                    <option value="Veteranos">Veteranos</option>
                    <option value="Força do Amanhã">Força do Amanhã</option>
                </select>
            </div>
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
            <div class="mb-3">
                <label for="statuspac">Status do Paciente:</label>
                <select class="form-select" id="statuspac" name="statuspac" required>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <label for="doencapreexis">Doença Preexistente:</label>
            <select id="doencapreexis" name="doencapreexis" class="form-select" required>
                <option value="Inexistente">Inexistente</option>
                <option value="Existente">Existente</option>
            </select>
           <label for="detalhesdoenca">Detalhes da Doença:</label>
           <input type="text" id="detalhesdoenca" name="detalhesdoenca" required><br><br>
           <button type="submit" class="btn btn-primary">Inserir Paciente</button>
    </form>
         </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>