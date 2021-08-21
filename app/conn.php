<?php
$srv = "localhost";
$usr = "root";
$key = "";
$db = "app";

try{
    $con = mysqli_connect($srv, $usr, $key, $db);
    //echo "conexão realizada com sucesso ";
    //var_dump($con);
}catch(SQLException $e){
    echo $e->getMessage();
    echo $e->getCode();
    echo $e->getLine();
    echo $e->getFile();
}