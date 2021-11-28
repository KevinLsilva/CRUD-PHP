<?php

include "../model/connect.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$sexo = $_POST["sexo"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];
$dtnasc = $_POST["nascimento"];
$tipo = $_POST["tipo"];

// receber o arquivo (imagem) e salvar no diretório do projeto
if ($_FILES["arquivo"]["name"]) { // testo se foi enviado o arquivo

    $dir = "../assets/avatar"; // define o caminho onde a imagem será salva

    $tmpName = $_FILES["arquivo"]["tmp_name"]; // recebeu o arquivo da imagem

    $name = $_FILES["arquivo"]["name"]; // recebe o nome da arquivo (imagem)

    $separa = explode(".", $name); // após a explosão recebemos um array [Lua, da, cidade ....]

    $separa = array_reverse($separa); // inverteu o array [jpg, paulo, de, cidade, da, lua ]

    $extensao = $separa[0];

    // criar o nome do arquivo composto pelo email do usuário (barth@barth.com) e a extensão (jpg)

    $avatar = $email . "." . $extensao; //  barth@barth.com.jpg

    $avatar = strtolower($avatar); // converto tudo para minúsculo p salvar no diretório

    move_uploaded_file($tmpName, $dir . $avatar); //

} else{
    $avatar = "NULL"; // salva no banco "null" caso avatar não tenha sido escolhido
}

// salvar os dados no banco

$sql = "INSERT INTO usuario (nome, email, senha, sexo, telefone, dtnasc, tipo, avatar)
VALUES ('$nome', '$email', '$senha', '$sexo', '$telefone', '$dtnasc', '$tipo', '$avatar')";


if(mysqli_query($connect, $sql)){

    echo    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Dados salvos com sucesso!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

        // carregar página de formulário
        
    include_once "../view/formulario.php";
} else{
    echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Não foi possível cadastrar o usuário!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
}

$connect->close();