<?php
    require 'conn.php';
    //validar $_POST
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];

    //$user = [$nome, $login, $sexo, $senha];

    $inserir = "INSERT INTO funcionario(nome, login, sexo, senha) VALUES('$nome', '$login', '$sexo', '$senha' )";
    $rs = mysqli_query($con, $inserir);
    //print_r($user);

    if($rs == true){
        echo "Cadastrado com sucesso";
        header('Location: index.php');
        exit;
    }else{
        echo "Não cadastrou!!! ";
    }
    ?>
    <br>
    <a href="index.php">Voltar</a>