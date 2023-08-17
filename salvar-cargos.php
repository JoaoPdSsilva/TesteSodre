<?php

switch ($_REQUEST["acaoCargo"]) {
    case 'cadastrar':
        $Nome = $_POST["cargo"];
        $sql= "INSERT INTO cargo (Nome) VALUES ( '{$Nome}')";

        $res = $conn->query($sql);
        $resp = $sqlUpdateQtdeFuncionarios = "UPDATE Cargo SET QtdeFuncionarios = (SELECT COUNT(*) FROM Funcionarios WHERE Funcionarios.CargoID = Cargo.ID)";

        if($res && $resp== true){
            

            print "<script>alert('Cargo cadastrado com sucesso!, retornando ao menu')</script>";
            print "<script>location.href = '?page=inicio';</script>";

        } else {
            print "<script>alert('Falha no cadastro de um novo cargo')</script>";
        }
        break;


    case 'excluir':
        # code...
        break;

    default:
        # code...
        break;
}