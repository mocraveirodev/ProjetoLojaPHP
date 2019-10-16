<?php 
    $usuario = ["email"=>"monica@email.com","senha"=>'$2y$10$WXI2Yxl3jO1uS4sORvYiJu/LSMi8d4MS3/2VJm0u9tod82HKTUH9u'];
    if($_POST){
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        // validando email
        if($email == $usuario["email"]){
            // validando senha 
            if(password_verify($senha,$usuario["senha"])){
                session_start();
                $_SESSION["usuario"] = ["nome"=>"Monikinhanx"];
                header('Location:index.php');
            }else{
                echo "Email ou Senha inválidos!";
            }
        }else{
            echo "Email ou Senha inválidos!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php include_once("header.php"); ?>
    <!-- <?php include_once "header.php"; ?> Também podemos usar dessa forma a chamada da função-->
    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="login.php" method="post" class="card p-2"> <!-- quando queremos enviar os dados do formulario pra mesma pagina podemos deixar o action vazio ou colocar a propria pagina -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Logar</button>
            </div>
            
        </form>
    </main>
</body>
</html>