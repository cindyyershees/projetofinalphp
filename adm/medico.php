<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuarioId'])) {
    
   
header("Location: index.php");
    
   
exit();
}

// Verifica se o usuário possui o nível de acesso de médico (por exemplo, nível 2)
if ($_SESSION['usuarioNiveisAcessoId'] != 2) {
    echo "Acesso não autorizado para médicos.";
    exit();
}

// Obtém informações do médico a partir do banco de dados (substitua isso com sua lógica de obtenção de dados)
$nomeMedico = " ";
$especialidade = " ";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Médico</title>
</head>
<body>
    <h1>Bem-vindo, Dr. 
</head>
<body>
    <h1>Bem-vindo, Dr.

</head>
<body>
    <h1>Bem-vindo, Dr

</head>
<body>
    <h1>Bem-vindo

</head>
<body>
    <h1>Bem

</head>
<body>
    <h

</head>
<body>
   

</head>
<?php echo $nomeMedico; ?></h1>
    <p>Você é um médico especializado em 
    <p>Você é um médico especializado

    <p>Você é um médico

    <p>Você

    <
<?php echo $especialidade; ?>.</p>
    <p>Esta é a área exclusiva para médicos.</p>
    <a href=
    <p>Esta é a área exclusiva para médicos.</p>
    <

    <p>Esta é a área exclusiva para médicos.</p>

    <p>Esta é a área exclusiva para médicos

    <p>Esta é a área exclusiva para méd

    <p>Esta é a área exclusiva

    <p>Esta é a

    <p>Esta

    <
"logout.php">Logout</a> <!-- Adicione um link para a página de logout -->
</body>
</html>

</body>