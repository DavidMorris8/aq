<?php

require_once '../modelo/funcionarioClasse.php';
$objFuncionario = new Funcionario();

if (isset($_POST['insert'])) {
    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];
    $cpf = $_POST['txtCpf'];
    if($objFuncionario->insert($nome, $idade, $cpf)){
        $objFuncionario->redirect('../funcionario.php');
    }
}

if(isset($_POST['editar'])) {
    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];
    $cpf = $_POST['txtCpf'];
    $id = $_POST['txtId'];
    if($objFuncionario->editar($nome, $idade, $cpf,$id)){
        $objFuncionario->redirect('../funcionario.php');
    }
}

if(isset($_POST['delete'])) {
    $id = $_POST['txtId'];
    if($objFuncionario->deletar($id)){
        $objFuncionario->redirect('../funcionario.php');
    }
}

?>