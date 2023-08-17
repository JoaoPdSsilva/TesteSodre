<h1> Listar usuarios</h1>

<?php

$sql = "SELECT * FROM funcionarios INNER JOIN Cargo ON funcionarios.CargoID = Cargo.ID";


$res = $conn->query($sql);

$qtd = $res -> num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Cargo</th>";
        print "<th>Salario</th>";
        print "<th>Rua</th>";
        print "<th>Bairro</th>";
        print "<th>Número da Casa</th>";
        print "<th>Ações</th>";
        print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->ID."</td>";
        print "<td>".$row->NomeF."</td>";
        print "<td>".$row->Nome."</td>";
        print "<td>".$row->Salario."</td>";
        print "<td>".$row->Rua."</td>";
        print "<td>".$row->Bairro."</td>";
        print "<td>".$row->NumeroCasa."</td>";
        print "<td>
            <button onclick=\"location.href='?page=editar&ID=".$row->ID."';\" class='btn btn-success'>Editar</button>

            <button onclick=\"if(
                confirm('Tem certeza que deseja excluir?')){
                    location.href='?page=salvar&acao=excluir&ID=".$row->ID."';}
                    else{false;}\" class='btn btn-danger'>Excluir</button>
        </td>";

        print "</tr>";
    }
    print "</table>";
}else{
    print "<p class='alert-danger'>Não encontrou resultados!</p>";
}

?>