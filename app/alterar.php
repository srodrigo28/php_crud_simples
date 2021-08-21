<?php

require 'conn.php';

$id = $_POST['id']; 
//echo $id; die;
$nome = $_POST['nome'];
$login = $_POST['login'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];

$update = " UPDATE funcionario SET nome = '$nome', login='$login', sexo='$sexo', senha='$senha' WHERE id_funcionario = $id";
$rs = mysqli_query($con, $update);

if($rs == true){
    echo "Cadastrado com sucesso";
    header('Location: index.php');
    exit;
}else{
    echo "Não cadastrou!!! ";
}
?>
<br>
<a href="form.php">Voltar</a>