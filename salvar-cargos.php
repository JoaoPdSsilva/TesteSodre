<?php

switch ($_REQUEST["acaoCargo"]) {
    case 'cadastrar':
        $nome_cargo = $_POST["cargo"];
        ++$qtdFunc;
        $sql= "INSERT INTO cargos (nome_cargo, qtdFunc) VALUES ( '{$nome_cargo}', '{$qtdFunc}')";

        $res = $conn->query($sql);

        if($res == true){
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