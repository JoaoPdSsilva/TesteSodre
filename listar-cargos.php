<h1> Listar Cargos</h1>

<?php

$sql ="SELECT Cargo.ID, Cargo.Nome, Cargo.QtdeFuncionarios, Cargo.TotalSalarios, 
SUM(Funcionarios.Salario) AS TotalSalariosFuncionarios,
(SELECT COUNT(*) FROM Funcionarios WHERE Funcionarios.CargoID = Cargo.ID) AS QtdeFuncionariosCargo
FROM Cargo
LEFT JOIN Funcionarios ON Cargo.ID = Funcionarios.CargoID
GROUP BY Cargo.ID, Cargo.Nome, Cargo.QtdeFuncionarios, Cargo.TotalSalarios";


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
        print "<td>".$row->ID."</td>";
        print "<td>".$row->Nome."</td>";
        print "<td>".$row->QtdeFuncionarios."</td>";
        print "<td>".$row->TotalSalarios."</td>";
    }
    print "</table>";
}else{
    print "<p class='alert-danger'>Não encontrou resultados!</p>";
}

?>