<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="inserir.php" method="post">
        <input type="text" name="nome" placeholder="nome" required>
        <input type="text" name="login" placeholder="login" required>
        <input type="text" name="sexo" placeholder="masc / femin" required>
        <input type="text" name="senha" placeholder="senha" required>
        <input type="submit" value="Cadastrar">
    </form>
    <div>
        <?php
            require 'conn.php';
            $sql = "SELECT * FROM funcionario";
            $rs = mysqli_query($con, $sql);

          //while($data = mysqli_fetch_assoc($rs)){
            while($data = mysqli_fetch_assoc($rs)){
                $id_funcionario = $data['id_funcionario'];
                $nome = $data['nome'];
                $login = $data['login'];
                $sexo = $data['sexo'];
                $senha = $data['senha'];

                echo "<br><br>Código " . $id_funcionario . "<br>" .
                "Nome: " . $nome . "<br>" .
                "Login: " . $login . "<br>" .
                "Sexo " . $sexo . "<br>" .
                "Código" . $senha . "<br>"; ?>
                <a href="excluir.php?id=<?=$id_funcionario?>">Excluir</a> |
                <a href="atualizar.php?id=<?=$id_funcionario?>">Atualizar</a>
                <?php
            }
        ?>
        
    </div>
</body>
</html>