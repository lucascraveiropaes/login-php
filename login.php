<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['login'], $_POST['senha']))
		{
			$login = $_POST['login'];
			$senha = $_POST['senha'];
			login($login, $senha);
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="index.php">Tentar Novamente</a></h3>';
			echo $message;
		}
	}
	else {		
		header("Location: index.php");
	}

	function checkValues($login, $senha) {
		if( isset($login) && !empty($login) && isset($senha) && !empty($senha) ){
			$R = true;
		}
		else {
			$R = false;
		}
		return $R;
	}

	function login($login, $senha) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "SELECT * FROM login.users WHERE login = '".$login."' AND senha = ".$senha;

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $mysqli->error);

		if(mysqli_num_rows($result) == 1){
			$message = "<h1>Seja bem vindo, " . $login . "</h1>";
		}
		else {
			$message = '<h1>Senha ou Login Incorretos.</h1>
						<h3>Por favor, <a href="index.php">Tente Novamente</a></h3>';
		}
		echo $message;
	}
?>