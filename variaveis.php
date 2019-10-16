<?php 
    session_start();
    $nomeSistema = "Lojinhe";
    // $usuario = ["nome"=>"Monica"];
    $usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : [];
    $nomeArquivo = "produto.json";
    $produtos = json_decode(file_get_contents($nomeArquivo),true);
    // $produtos = [
    //     ["nome"=>"Curso FullStack","preco"=>1200.00,"duracao"=>"5 meses","img"=>"https://www.exonar.com/wp-content/uploads/2017/09/full-stack-developer.jpg"],
    //     ["nome"=>"Curso Marketing","preco"=>1000.00,"duracao"=>"4 meses","img"=>"https://image.freepik.com/vetores-gratis/fundo-de-marketing-em-estilo-simples_23-2147792138.jpg"],
    // ];
    $categorias = ["Cursos","Palestras","Artigos"];
?>