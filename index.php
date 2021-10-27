<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <?php include_once "conexao.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="titulo">Agenda<h1>
                        <div class="adicionar-contatos">
                            <img class="img-add" src="img/group.png">
                            <a class="add-contato" href="cadastro.php">Adicionar aos contatos<a>
                        </div>
            </div>
            <div class="col-8">
                <div class="bloco-contatos">
                    <?php
                    $consulta = $conectar->query("SELECT * FROM contatos");

                    if ($consulta->rowCount() > 0) {
                        foreach ($consulta as $item) {
                    ?>
                            <div class="imagem-contato">
                                <img class= "img-c" src= "uploads/<?php echo"{$item['imagem']}"?>">
                            </div>
                            <div class="nome-contato">
                                <h4 class="nome-c"><?php echo "{$item['nome']}" ?></h4>
                            </div>
                            <div class="telefone-contato">
                                <p class="telefone-c">Telefone: <?php echo "{$item['telefone']}" ?></p>
                            </div>
                            <div class="cep-contato">
                                <p class="cep-c">Cep: <?php echo "{$item['cep']}" ?></p>
                            </div>
                            <div class="rua-contato">
                                <p class="rua-c">Rua: <?php echo "{$item['rua']}" ?></p>
                            </div>
                            <div class="bairro-contato">
                                <p class="bairro-c">Bairro: <?php echo "{$item['bairro']}" ?></p>
                            </div>
                            <div class="numero-contato">
                                <p class="numero-c">Número: <?php echo "{$item['numero']}" ?></p>
                            </div>
                            <div class="cidade-contato">
                                <p class="cidade-c">Cidade: <?php echo "{$item['cidade']}" ?></p>
                            </div>

                    <?php   }
                    } else {
                        echo '<div class="erro"><div class="container">';
                        echo '<img class="erro-img" src="img/error.png">';
                        echo '<p class="texto-erro">Falha na conexão com o banco de dados</p>';
                        echo '</div></div>';
                    }
                    ?>

                </div>
            </div>
        </div>
</body>

</html>