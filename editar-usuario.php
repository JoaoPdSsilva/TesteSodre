<h1> Editar Colaborador</h1>
<?php
    $sql = "SELECT * FROM funcionarios WHERE IdFunc=".$_REQUEST["IdFunc"];
    $res = $conn->query($sql);
    $row = $res -> fetch_object();
    ?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value= "<?php print $row->IdFunc ?>">
    <div class="mb-3">

        <label>Nome</label>
        <input type="text" name="nome_func" value="<?php print $row->nome_func ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cargo</label>
        <input type="text" name="Cargo" value="<?php print $row->Cargo?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Salario</label>
        <input type="text" name="salario" value="<?php print $row->salario ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-primary">Editar</button>
    </div>
    
</form>