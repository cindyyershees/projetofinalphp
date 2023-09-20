<?php
	session_start();
	include_once("conexao/conexao.php");
	// Verifica se os campos possuem dados 
	if(isset($_POST['txt_usuario']) && isset($_POST['txt_senha'])){
		$usuario = mysqli_real_escape_string($conn, $_POST['txt_usuario']);
		$senha = mysqli_real_escape_string($conn, $_POST['txt_senha']);
		$senha = md5($senha);
		
		$result_usuario = "SELECT * FROM niveisacesso WHERE email = '$usuario' AND senha = '$senha'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		// Encontrando um usuário na tabela usuario com os mesmos dados digitados pelo usuário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: administrativo.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: colaborador.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "3"){
				header("Location: cliente.php");
			}else{
				$_SESSION['loginErro'] = "Erro - Entre em contato ";
				header("Location: index.php");
			}
		}else{
			$_SESSION['loginErro'] = "Usuário ou senha inválido";
			header("Location: index.php");
		}
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}
?>
