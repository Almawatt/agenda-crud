<?php
include_once "conexao.php";
try {
    $nome = filter_var($_POST['nome']);
    $telefone = filter_var($_POST['telefone']);
    $cep = filter_var($_POST['cep']);
    $rua = filter_var($_POST['rua']);
    $bairro = filter_var($_POST['bairro']);
    $numero = filter_var($_POST['numero']);
    $cidade = filter_var($_POST['cidade']);

    $insert = $conectar->prepare("INSERT INTO contato (nome, telefone, cep, rua, bairro, numero, cidade) VALUE (:nome, :telefone, :cep, :rua, :bairro, :numero, :cidade)");
    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':cep', $cep);
    $insert->bindParam(':rua', $rua);
    $insert->bindParam(':bairro', $bairro);
    $insert->bindParam(':numero', $numero);
    $insert->bindParam(':cidade', $cidade);
    $insert->execute(); 

    header("location: /index.php");
} catch (PDOException $e){
    echo 'Erro: ' . $e->getMessage();
}
