
<div class="jumbotron text-center">
        <h1>Cadastro de Alunos</h1>
    </div>
    <form>
        <div class="row">
            <div class="col">
                <label for="">Nome</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="">Serie</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="">Turma</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <button onclick="Inserir()" class="btn btn-primary mt-3">Cadastrar</button>
    </form>
    <table class="table striped mt-5">
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

    <script>
        function Inserir(){
            alert('Inserido com sucesso')
        }
    </script>
</body>
</html>