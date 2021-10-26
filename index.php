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
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="titulo">Agenda<h1>
                    <div class="adicionar-contatos">
                        <img class="img-add" src="img/group.png">
                        <h3 class="add-contato">Adicionar aos contatos<h3>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="bloco-contatos">
                                <?php
                                include_once "conexao.php";
                                try{
                                    $consulta = $conectar->query("SELECT * FROM contatos");
                                    $image_details  = mysqli_query($conn, "SELECT * FROM customer_table");
                                    while ($row = mysqli_fetch_array($image_details)) {    
                                     echo "<div class='imagem-contato'> <img src='img/".$row['imagem']."></div>";
                                    }
                                    while( $linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                                        echo "<div class='nome-contato'> <p>$linha[nome]</p></div>";
                                        echo "<div class='telefone-contato'> <p>Telefone: $linha[telefone]</p></div>";
                                        echo "<div class='cep-contato'> <p>Cep: $linha[cep]</p></div>";
                                        echo "<div class='rua-contato'> <p>Rua: $linha[rua]</p></div>";
                                        echo "<div class='bairro-contato'><p>Bairro: $linha[bairro]</p></div>";
                                        echo "<div class='numero-contato'><p>Número: $linha[numero]</p></div>";
                                        echo "<div class='cidade-contato'><p>Cidade: $linha[cidade] </p></div>";
                                    };
                                }catch(PDOException $e){
                                    echo '<div class="erro"><div class="container">';
                                    echo '<img class="erro-img" src="img/error.png">'; 
                                    echo '<p class="texto-erro">Falha na conexão com o banco de dados</p>';
                                    echo '</div></div>';
                                }

                                 ?>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>
<?php
include_once "conexao.php";
