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
		$verificaLogin = $sql->prepare("SELECT email, senha, id FROM usuario WHERE email = ?");
		$verificaLogin->bindParam(1, $email, PDO::PARAM_STR);
		$verificaLogin->execute();
	}catch(PDOException $e){
		echo $e->getMessage();
	}

	if($verificaLogin->rowCount()){
		$rowLogin = $verificaLogin->fetchObject();

		if(password_verify($senha, $rowLogin->senha)){
			$_SESSION['id'] = $rowLogin->id;

            header('Location: ../veiculos.php');
            die();
		}else{
			header('Location: ../login.php?status=invalid');
			die();
		}
	}else{
		header('Location: ../login.php?status=dontexist');
		die();
	}
}
