<h1> Editar Colaborador</h1>
<?php
    $sql = "SELECT * FROM funcionarios WHERE ID=".$_REQUEST["ID"];
    

    $res = $conn->query($sql);
    $row = $res -> fetch_object();
    ?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="ID" value= "<?php print $row->ID ?>">
    <div class="mb-3">

        <label>Nome</label>
        <input type="text" name="Nome" value="<?php print $row->NomeF ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>ID do Cargo</label>
        <input type="text" name="CargoID" value="<?php print $row->CargoID?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Salario</label>
        <input type="text" name="Salario" value="<?php print $row->Salario ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Rua</label>
        <input type="text" name="Rua" value="<?php print $row->Rua ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Bairro</label>
        <input type="text" name="Bairro" value="<?php print $row->Bairro ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Numero Da Casa</label>
        <input type="text" name="NumeroCasa" value="<?php print $row->NumeroCasa ?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>