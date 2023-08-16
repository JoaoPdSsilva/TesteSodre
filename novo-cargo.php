<h1> Novo Cargo</h1>
<form action="?page=salvarCargo" method="POST">
    <input type="hidden" name="acaoCargo" value="cadastrar">
  
    <div class="mb-3">
        <label>Nome do cargo</label>
        <input type="text" name="cargo" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn-primary">Cadastrar</button>
    </div>
    
</form>