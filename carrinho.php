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
       <section class="container">
           <div class="row">
               <div class="col-12">
                   <h1>Carrinho de Compras</h1>
               </div>
               <div class="col-12">
                   <div class="row card">
                       <div class="col-12">
                           <h3>Você está comprando o <?php echo $_GET["nomeProduto"]; ?></h3>
                       </div>
                       <div class="col-lg-6 col-md-6">
                            <form class="d-flex flex-column p-3" action="sucesso.php" method="post">
                                <input type="text" name="nomeCompleto" placeholder="Digite seu nome:">
                                <input type="text" name="cpf" placeholder="Digite seu CPF:">
                                <input type="number" name="cartao" placeholder="Digite o número do seu cartão:">
                                <input type="date" name="validadeCartao" placeholder="Digite a data de vlidade do cartão:">
                                <input type="password" name="codigoCartao" placeholder="Digite o CVV:">
                                <button class="btn btn-success" type="submit">Finalizar Compra</button>
                            </form>
                       </div>
                   </div>
               </div>
           </div>
       </section>
    </main>
</body>
</html>