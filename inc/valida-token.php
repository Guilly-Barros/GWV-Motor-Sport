<?php
if(!empty($_POST['token'])){
  $token = empty($_SESSION['token']) ? NULL : $_SESSION['token'];

  if($token !== $_POST['token']){
  	die('Token indiferente');
  	exit;
  }
}else{
  die('Token vazio');
  exit;
}
