<?php
    require 'conn.php';

    $id = $_GET["id"]; // echo $id;

    $delete = "DELETE FROM funcionario WHERE id_funcionario = $id";
    $rs = mysqli_query($con, $delete);
    if($rs == true){
        header('Location: index.php');
        exit;
    }else{
        echo "Error !!!";
    }

    