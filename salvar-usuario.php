<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome_func"];
        $cargo = $_POST["Cargo"];
        $salario = $_POST["salario"];
        
        $sql= "INSERT INTO funcionarios (nome_func, Cargo, salario) VALUES ( '{$nome}', '{$cargo}', '{$salario}')";

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Cadastrado com sucesso!, retornando ao menu')</script>";
            print "<script>location.href = '?page=inicio';</script>";

        } else {
            print "<script>alert('Falha no cadastro')</script>";
        }
        break;

    case 'editar':
        $nome = $_POST["nome_func"];
        $cargo = $_POST["Cargo"];
        $salario = $_POST["salario"];
        
        $sql= "UPDATE funcionarios SET 
        nome_func ='{$nome}',
        Cargo='{$cargo}',
        salario ='{$salario}'
        WHERE IdFunc=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Editado com sucesso!, retornando ao menu')</script>";
            print "<script>location.href = '?page=inicio';</script>";

        } else {
            print "<script>alert('Falha no processo de edição')</script>";
        }
        break;

    case 'excluir':
        # code...
        break;

    default:
        # code...
        break;
}