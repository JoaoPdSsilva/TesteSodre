<h1> Listar Cargos</h1>

<?php

$sql = "SELECT * FROM cargos";

$res = $conn->query($sql);

$qtd = $res -> num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
        print "<th>#</th>";
        print "<th>Cargo</th>";
        print "<th>Qtde Funcionários</th>";
        print "<th>Total de Salários</th>";
        print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->idCargos."</td>";
        print "<td>".$row->nome_cargo."</td>";
        print "<td>".$row->qtdFunc."</td>";
        print "<td>".$row->totalDeSal."</td>";
    }
    print "</table>";
}else{
    print "<p class='alert-danger'>Não encontrou resultados!</p>";
}

?>