<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucesso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php 
        include_once("header.php");
        include_once("config/validacoes.php");

        $nome = $_POST["nomeCompleto"];
        $cpf = $_POST["cpf"];

        validaNome($nome);
        validaCPF($cpf);

        if(count($erros) == 0){
            echo "<h1>Olá $nome, sua compra foi realizada com sucesso! :)</h1>";
        }else{
            foreach($erros as $erro){
                echo "<h2>$erro</h2>";
            }
        }
    ?>    
</body>
</html>