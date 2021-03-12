<?php 
    include("conectar.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["CPF"];
    $senha = md5($_POST["senha"]);

    $query = ("SELECT * FROM usuarios_registrados WHERE email = '$email' OR cpf = '$cpf';");

    $request = mysqli_query($conn, $query);

    if($request){
        if(mysqli_num_rows($request) != 0){
            echo "<script type='text/javascript'> window.location.href =
            '../../pag_form_registro.php'; alert('Email ou CPF ja cadastrado, tente novamente.'); </script>";
        }elseif(mysqli_num_rows($request) <= 0){
            $query_registro = ("INSERT INTO `usuarios_registrados` (`nome`, `email`, `cpf`, `senha`) VALUES ('$nome', '$email', '$cpf', '$senha')");
            if(mysqli_query($conn, $query_registro)){
                echo "<script type='text/javascript'> window.location.href =
                '../../pag_form_login.php'; alert('Usuario registrado com sucesso.'); </script>";
            }else{
                echo "<script type='text/javascript'> window.location.href =
                '../../pag_form_registro.php'; alert('Erro ao registrar usuario, tente novamente.'); </script>";
            }
        }else{
            echo "<script type='text/javascript'> window.location.href =
            '../../pag_form_registro.php'; alert('Erro ao validar seu email, tente novamente.'); </script>";
        }
    }else{
        echo "<script type='text/javascript'> window.location.href =
        '../../pag_form_registro.php'; alert('Erro de requisicao, tente novamente.'); </script>";
    }

    

?>