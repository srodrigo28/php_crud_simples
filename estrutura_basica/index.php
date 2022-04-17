<?php
require "./inicio.php"
?>
    <div class="jumbotron text-center">
        <h1>Cadastro de Alunos</h1>
    </div>
    <form>
        <div class="row">
            <label for="">Nome</label>
            <input type="text" class="form-control">
        </div>

        <div class="row">
            <label for="">Serie</label>
            <input type="text" class="form-control">
        </div>

        <div class="row">
            <label for="">Turma</label>
            <input type="text" class="form-control">
        </div>

        <div class="row">
            <button class="btn btn-primary mt-3">Cadastrar</button>
        </div>

    </form>
    <table class="table striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Serie</th>
                <th>Turma</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Edson Emanoel</td>
                <td>7 ano</td>
                <td>B</td>
            </tr>
            <tr>
                <td>Aline Silva</td>
                <td>7 ano</td>
                <td>B</td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>