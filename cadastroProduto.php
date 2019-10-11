<?php
    function cadastrarProduto($nomeProduto,$descProduto,$imgProduto,$precoProduto){
        $nomeArquivo = "produto.json";
        if(file_exists($nomeArquivo)){

        }else{
            $produtos = [];
            $produtos[] = ["nome"=>$nomeProduto,"preco"=>$precoProduto,"desc"=>$descProduto,"img"=>$imgProduto];
            var_dump($produtos);
        }
    }
    if($_POST){
        cadastrarProduto($_POST["nomeProduto"],$_POST["descProduto"],$_POST["imgProduto"],$_POST["precoProduto"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Cadastro de Produto</h1>
            </div>
            <div class="col-12">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nomeProduto" placehorder="Nome do Produto">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="descProduto" placehorder="Descrição do Produto">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="imgProduto" placehorder="Imagem do Produto">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="precoProduto" placehorder="Preço do Produto">
                    </div>
                    <button class="btn btn-success">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>