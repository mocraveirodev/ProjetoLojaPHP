<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lojinhe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php include_once("header.php"); ?>
    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
            <?php if(isset($produtos) && $produtos != []) {?>
                <?php foreach($produtos as $produto){ ?>
                    <div class="col-lg-3 card text-center">
                        <h2><?php echo $produto["nome"]; ?></h2>
                        <img class="card-img-top" src="<?php echo $produto["img"]; ?>" alt="Card image">
                        <div class="card-body">
                        <h4 class="card-title"><?php echo "R$".$produto["preco"].",00"; ?></h4>
                        <a href="carrinho.php?nomeProduto=<?php echo $produto["nome"]; ?>" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                <?php } ?>
            <?php }else{ 
                echo "<h1>Não tem produtos cadastrados nessa sessão! :(</h1>";
             } ?>
            </div>
        </section>
    </main>
    <?php 
        // echo "Hello World!";

        // $nome = "Monica";
        // echo $nome;
        // var_dump($nome);
        // $usuario = ["Monica","Craveiro",32,["tartaruga","patins","codar"]];
        // $usuario2 = ["Nome" => "Monica","Sobrenome" => "Craveiro","Idade" => 32, "Interesses" => ["tartaruga","patins","codar"]];

        // echo "<br>";
        
        // echo "<h1>".$usuario[0]."        ".$usuario[1]."</h1>";
        // echo "<br>";
        // echo $usuario[0&&1];
    ?>
</body>
</html>