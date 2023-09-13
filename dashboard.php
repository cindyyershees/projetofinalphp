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

$sql = "SELECT * FROM funcionarios " ; {
    if "medicos" WHERE 
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
            <!-- Conteúdo da visão geral -->
        </section>
        <section>
            <h2>Atividades Recentes</h2>
            <ul>
               
            </ul>
        </section>
    </main>
    <footer>



       
    <p>&copy; 2023 Seu Dashboard. Todos os direitos reservados.</p>
    
    </footer>
</body>
</html>