<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bd =  'sisgeresaude';

$con = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$con){
    echo "<h1>Erro na conexão</h1>";
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM funcionarios WHERE cargo = 'medicos'";

$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Erro na consulta: " . mysqli_error($con);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Clínica da Família Augusta King</title>
</head>
<body>
    <header>
        <h1>Bem-vindo a Clínica da Família Augusta King</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Página Inicial</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Configurações</a></li>
            <li><a href="#">Sair</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Visão Geral</h2>
           
        </section>
        <section>
            <h2>Atividades Recentes</h2>
            <ul>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>" . $row['nome'] . " " . $row['cargo'] . "</li>";
                }
                ?>
            </ul>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>
