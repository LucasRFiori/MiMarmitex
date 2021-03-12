<?php
include("conectar.php");
session_start();


$usuario = $_POST["email"];

$senha = md5($_POST["senha"]);

$query = ("SELECT * FROM usuarios_registrados WHERE email = '$usuario' AND senha = '$senha';") or die("Erro ao consultar.");

$request = mysqli_query($conn, $query);
$row = mysqli_num_rows($request);

if(mysqli_num_rows($request) != 0){
  echo "<script type='text/javascript'> window.location.href =
        '../../app.php'; alert('Logado com sucesso'); </script>";
}else{
  echo "<script type='text/javascript'> window.location.href =
  '../../pag_form_login.php'; alert('Email ou senha incorretos, tente novamente.'); </script>";
}

?>