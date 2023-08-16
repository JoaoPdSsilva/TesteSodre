<h1> Listar usuarios</h1>

<?php

$sql = "SELECT * FROM funcionarios";

$res = $conn->query($sql);

$qtd = $res -> num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Cargo</th>";
        print "<th>Salario</th>";
        print "<th>Ações</th>";
        print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->IdFunc."</td>";
        print "<td>".$row->nome_func."</td>";
        print "<td>".$row->Cargo."</td>";
        print "<td>".$row->salario."</td>";
        print "<td>
            <button onclick=\"location.href='?page=editar&IdFunc=".$row->IdFunc."';\" class='btn btn-success'>Editar</button>

            <button class='btn btn-danger'>Excluir</button>
        </td>";

        print "</tr>";
    }
    print "</table>";
}else{
    print "<p class='alert-danger'>Não encontrou resultados!</p>";
}

?>