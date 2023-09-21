<?php
session_start();


if (isset($_SESSION['usuarioId'])) {

    if ($_SESSION['usuarioNiveisAcessoId'] == 1) {
        header("Location: medico.php");
    } elseif ($_SESSION['usuarioNiveisAcessoId'] == 2) {
        header("Location: enfermeiro.php");
    } elseif ($_SESSION['usuarioNiveisAcessoId'] == 3) {
        header("Location: agentecomusaude.php");
    }
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $usuario = $_POST['txt_usuario']; 
    $senha = $_POST['txt_senha'];    
  
    if ($usuario == "admin" && $senha == "senhaadmin") {
 
        $_SESSION['usuarioId'] = 1;
        $_SESSION['usuarioNome'] = "Medico";
        $_SESSION['usuarioNiveisAcessoId'] = 1;
    
        header("Location: medico.php");
        exit();
    } else {
       
        $loginErro = "Usuário ou senha inválido";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    if (isset($loginErro)) {
        echo "<p style='color: red;'>$loginErro</p>";
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="txt_usuario">Usuário:</label>
        <input type="text" id="txt_usuario" name="txt_usuario" required><br><br>
        <label for="txt_senha">Senha:</label>
        <input type="password" id="txt_senha" name="txt_senha" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
