<h1> Novo Colaborador</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_func" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cargo</label>
        <input type="text" name="Cargo" class="form-control">
    </div>

    <div class="mb-3">
        <label>Salario</label>
        <input type="text" name="salario" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-primary">Cadastrar</button>
    </div>
    
</form>