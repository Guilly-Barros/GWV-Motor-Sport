<?php
session_start();
require('../inc/config.php');
require('../inc/valida-token.php');
require('../inc/valida-strings.php');

if(!empty($_POST['email']) && !empty($_POST['senha'])){
	$nome = clear($_POST['nome']);
	$email = clear($_POST['email']);
	$senha = clear($_POST['senha']);

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header('Location: ../login.php?status=invalid');
		die();
	}

	try{
		$verificaLogin = $sql->prepare("SELECT email FROM usuario WHERE email = ?");
		$verificaLogin->bindParam(1, $email, PDO::PARAM_STR);
		$verificaLogin->execute();
	}catch(PDOException $e){
		echo $e->getMessage();
	}

	if($verificaLogin->rowCount()){
		header('Location: ../login.php?status=exist');
		die();
	}else{
		$optionsPassword = ['cost' => 12];
		$senhaHashed = password_hash($senha, PASSWORD_BCRYPT, $optionsPassword);

		try{
			$criaConta = $sql->prepare("INSERT INTO usuario SET email = ?, senha = ?, nome_completo = ?, is_admin = 0");
			$criaConta->bindParam(1, $email, PDO::PARAM_STR);
			$criaConta->bindParam(2, $senhaHashed, PDO::PARAM_STR);
			$criaConta->bindParam(3, $nome, PDO::PARAM_STR);
			if($criaConta->execute()){
				$_SESSION['id'] = $sql->lastInsertId();

                header('Location: ../veiculos.php');
                die();
			}else{
				header('Location: ../login.php?status=error');
				die();
			}
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

}else{
	header('Location: ../login.php?status=empty');
	die();
}
