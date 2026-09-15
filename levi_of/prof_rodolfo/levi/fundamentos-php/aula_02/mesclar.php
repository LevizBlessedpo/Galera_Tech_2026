<?php 
    // Crie uma variavel para idade, sexo, senha
    // Mostre abaixo do nome no html
    $nomeUsuario = "Ibere";
    $idade = 17;
    $Sexo = "Masculino";
    $Senha = "@1223331";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do - <?= "$nomeUsuario" ?></title>
</head>
<body>
    <?= "<h3>Nome do usuário: $nomeUsuario</h3>"; ?>
    <?= "<h3>Idade do usuário: $idade</h3>"; ?>
    <?= "<h3>Sexo do usuário: $Sexo</h3>"; ?>
    <?= "<h3>Senha do usuário: $Senha</h3>"; ?>
</body>
</html>