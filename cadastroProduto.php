<?php
    function cadastrarProduto($nomeProduto,$descProduto,$imgProduto,$precoProduto){
        $nomeArquivo = "produto.json";
        if(file_exists($nomeArquivo)){
            $arquivo = file_get_contents($nomeArquivo);
            $produtos = json_decode($arquivo,true);
            $produtos[] = ["nome"=>$nomeProduto,"preco"=>$precoProduto,"desc"=>$descProduto,"img"=>$imgProduto];
            var_dump($produtos);
            $json = json_encode($produtos);
            $deuCerto = file_put_contents($nomeArquivo,$json);

            if($deuCerto){
                return "Deu Bom!";
            }else{
                return "Deu ruim!";
            }
        }else{
            $produtos = [];
            $produtos[] = ["nome"=>$nomeProduto,"preco"=>$precoProduto,"desc"=>$descProduto,"img"=>$imgProduto];
            // var_dump($produtos);
            $json = json_encode($produtos);
            $deuCerto = file_put_contents($nomeArquivo,$json);

            if($deuCerto){
                return "Deu Bom!";
            }else{
                return "Deu ruim!";
            }
        }
    }
    if($_POST){
        // var_dump($_FILES);
        // exit;
        $nomeImg = $_FILES["imgProduto"]["name"];
        $locasTmp = $_FILES["imgProduto"]["tmp_name"];
        $caminhoSalvo = "img/".$nomeImg;

        $deuCerto = move_uploaded_file($locasTmp,$caminhoSalvo);
        exit;
        echo cadastrarProduto($_POST["nomeProduto"],$_POST["descProduto"],$_POST["imgProduto"],$_POST["precoProduto"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro Produto</title>
</head>
<body>
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Cadastro de Produto</h1>
            </div>
            <div class="col-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do Produto"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="descProduto" placeholder="Descrição do Produto"/>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="imgProduto" placeholder="Imagem do Produto"/>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="precoProduto" placeholder="Preço do Produto"/>
                    </div>
                    <button class="btn btn-success">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>