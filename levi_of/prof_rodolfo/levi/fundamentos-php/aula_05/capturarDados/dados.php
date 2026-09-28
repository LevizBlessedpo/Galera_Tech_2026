<?php
    // capturar os dados do formulario.php
    $nomeBebe = $_POST['nomeBebe'];
    $sexo = $_POST['Sexo'];
    $dataNascimento = $_POST['dataNascimento'];
    $horaNascimento = $_POST['horaNascimento'];
    $peso = $_POST['peso'];
    $tipoSanguineo = $_POST['tipoSanguineo'];
    $observacao = $_POST['observacao'];

    // Analisa se foi preenchido
    // Empty significa que está vazio
    $erros = [];

    if (empty($nomeBebe)) {
        $erros[] = " Essa criança não tem nome!";
    }

    if (empty($sexo)) {
        $erros[] = " O campo sexo está em branco!";
    }

    if (empty($dataNascimento)) {
        $erros[] = " O campo de nascimento está em branco!";
    }

    if (empty($peso)) {
        $erros[] = " A criança não tem peso especificado!";
    }
    
    // Verifica se tiver menos de 5 caracteres 
    if (strlen($observacao) < 5) {
        $erros[] = "Você digitou pouca coisa!";
    }

    if(!empty($erros)) {
        // foreach repete a informação até que não haja mais nenhuma informação dentro
        foreach($erros as $erro) {
            echo $erro;
        }
    } else {
        echo "Seu bebe é o $nomeBebe, $sexo, $dataNascimento";
        echo "<br> Nasceu as $horaNascimento com $peso e $tipoSanguineo";
    }
    echo " <a href='formulario.php'>voltar para o formulário</a>"
?>