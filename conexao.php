<!-- link css -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

try{
    //faz conexao com o banco de dados
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=agenda-crud", "root", "Tai250603.");
    
} catch(PDOException $e) {
    //Caso ocorra algum erro na conexão, exibe a mensagem
    echo '<div class="erro"><div class="container">';
    echo '<img class="erro-img" src="img/error.png">'; 
    echo '<p class="texto-erro">Falha na conexão com o banco de dados</p>';
    echo '</div></div>';
}