<h1> Novo Colaborador</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3 px-2">
        <label>Nome</label>
        <input type="text" name="NomeF" class="form-control">
    </div>

    <div class="mb-3">
        <label>Rua</label>
        <input type="text" name="Rua" class="form-control">
    </div>

    <div class="mb-3">
        <label>Bairro</label>
        <input type="text" name="Bairro" class="form-control">
    </div>

    <div class="mb-3">
        <label>Numero Da Casa</label>
        <input type="text" name="NumeroCasa" class="form-control">
    </div>

    <div class="mb-3">
        <label>Salario</label>
        <input type="text" name="Salario" class="form-control">
    </div>


    <label>Cargo:</label>
    <select  name="CargoID" class="form-control" required>
        <option value="">Selecione um cargo</option>
<?php
    $sql = "SELECT ID, Nome FROM cargo";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["ID"] . "'>" . $row["Nome"] . "</option>";
            }
        }

        $conn->close();
        ?>
    </select><br>


       <br><br>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    
</form>