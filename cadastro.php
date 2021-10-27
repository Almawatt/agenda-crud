<?php include_once "conexao.php"; ?>

<div class="container">
<form action="adicionar-contato.php" method="POST">
    <p>Nome:<p> 
    <input type="text" name="nome" id="nome">

    <p>Telefone:</p>
    <input type="text" name="telefone" id="telefone">

    <p>Cep:</p>
    <input type="text" name="cep" id="cep">
    
    <p>Rua:</p>
    <input type="text" name="rua" id="rua">
    
    <p>Bairro:</p>
    <input type="text" name="bairro" id="bairro">

    <p>Número:</p>
    <input type="text" name="numero" id="numero">

    <p>Cidade:</p>
    <input type="text" name="cidade" id="cidade">
<!-- 
    <p>Imagem de Perfil:</p>
    <input type="file" name="imagem" id="imagem"> -->

    <input type="submit" name= "cadastrar" id= "cadastrar" value="Cadastrar">
</form>
</div>
