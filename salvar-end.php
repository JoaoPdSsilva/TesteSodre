<h1> Novo Endereço</h1>
<form action="?page=salvarEnd" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
  
    <div class="mb-3">
        <label>Rua</label>
        <input type="text" name="Rua" class="form-control">
    </div>

    <div class="mb-3">
        <label>Bairro</label>
        <input type="text" name="Bairro" class="form-control">
    </div>

    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="Cidade" class="form-control">
    </div>

    <div class="mb-3">
        <label>numero da casa</label>
        <input type="text" name="num_Casa" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn-primary">Cadastrar endereço</button>
    </div>
    
</form>