<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["NomeF"];
        $cargo = $_POST["CargoID"];
        $salario = $_POST["Salario"];
        $rua =$_POST["Rua"];
        $bairro = $_POST["Bairro"];
        $numCasa = $_POST["NumeroCasa"];
        
        $sql = "INSERT INTO Funcionarios (NomeF, CargoID, Salario, Rua, Bairro, NumeroCasa)
        VALUES ('$nome', '$cargo', '$salario', '$rua', '$bairro', '$numCasa')";

                
        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Cadastrado com sucesso!, retornando ao menu')</script>";
            print "<script>location.href = '?page=inicio';</script>";

        } else {
            print "<script>alert('Falha no cadastro')</script>";
        }
        break;

    case 'editar':
        $nome = $_POST["NomeF"];
        $cargo = $_POST["CargoID"];
        $salario = $_POST["Salario"];
        $rua =$_POST["Rua"];
        $bairro = $_POST["Bairro"];
        $numCasa = $_POST["NumeroCasa"];
        
        $sql= "UPDATE funcionarios SET 
        NomeF ='{$nome}',
        CargoID='{$cargo}',
        Salario ='{$salario}'
        Rua ='{$rua}',
        Bairro='{$bairro}',
        NumeroCasa ='{$numCasa}'
        WHERE ID=".$_REQUEST["ID"];

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Editado com sucesso!, retornando ao menu')</script>";
            print "<script>location.href = '?page=inicio';</script>";

        } else {
            print "<script>alert('Falha no processo de edição')</script>";
        }
        break;

    case 'excluir':
        
        $sql = "DELETE FROM funcionarios WHERE ID=".$_REQUEST["ID"];
        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Excluido com sucesso!, retornando ao menu')</script>";
            print "<script>location.href = '?page=inicio';</script>";

        } else {
            print "<script>alert('Falha no processo de exclusão')</script>";
        }

        break;

    default:
        # code...
        break;
}