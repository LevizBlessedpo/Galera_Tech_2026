<?php
    // Área de declaração das váriaveis do php de inscricoes.php
    $nomeCandidato = $_POST['nomeCandidato'];
    $enderecoCandidato = $_POST['enderecoCandidato'];
    $sexoCandidato = $_POST['Sexo'];
    $cpfCandidato = $_POST['cpfCandidato'];
    $bairroCandidato = $_POST['bairroCandidato'];
    $estadoCandidato = $_POST['estadoCandidato'];
    $telefoneCandidato = $_POST['telefoneCandidato'];
    $dataNascimentoCandidato = $_POST['dataNascimento'];
    $escolaCandidato = $_POST['escolaCandidato'];
    $serieEscolarCandidato = $_POST['serieEscolar'];
    $turnoEscolarCandidato = $_POST['turnoEscolar'];
    $nomeResponsavelCandidato = $_POST['nomeResponsavel'];
    $sexoResponsavel = $_POST['sexoResponsavel'];
    $telefoneResponsavelCandidato = $_POST['telefoneResponsavel'];
    $cinCandidato = $_POST['cinCandidato'];

    $erros = [];

    // Área para indentificação de possíveis erros no inscricoes.php
    if (empty($nomeCandidato)) {
        $erros[] = " Esse candidato não possui nome";
    }

    if(empty($cinCandidato)) {
        $erros[] = " O campo de RG está em branco";
    }

    if (empty($sexoCandidato)) {
        $erros[] = " O campo sexo está em branco!";
    }

    if (empty($bairroCandidato)) {
        $erros[] = " O campo bairro está em branco!";
    }

    if(empty($cpfCandidato)) {
        $erros[] = "O campo de cpf está em branco!";
    }

    if (empty($estadoCandidato)) {
        $erros[] = " O campo Estado está em branco!";
    }

    if (empty($sexoResponsavel)) {
        $erros[] = " O campo de sexo do responsável está em branco!";
    }

    if (empty($telefoneCandidato)) {
        $erros[] = " O campo de telefone está em branco!";
    }

    if (empty($dataNascimentoCandidato)) {
        $erros[] = " Data de nascimento está em branco!";
    }
    if (empty($escolaCandidato)) {
        $erros[] = " O campo de escola está em branco!";
    }

    if (empty($serieEscolarCandidato)) {
        $erros[] = "O campo de serie escolar está em branco!";
    }

    if (empty($turnoEscolarCandidato)) {
        $erros[] = " O campo de turno escolar do candidato está em branco! ";
    }

    if (empty($nomeResponsavelCandidato)) {
        $erros[] = " O campo do nome do responsável está em branco!";
    }

    if (empty($telefoneResponsavelCandidato)) {
        $erros[] = " O campo do telefone do responsável está em branco!";
    }

    if (!empty($erros)) {
        // foreach repete a informação até que não haja mais nenhuma informação dentro
        foreach ($erros as $erro) {
            echo $erro;
        }
    } else {
        echo "O nome do candidato é $nomeCandidato possui endereco = $enderecoCandidato possui sexo $sexoCandidato cujo.";

        echo "<br>Estuda na escola $escolaCandidato está na série $serieEscolarCandidato estuda no período da $turnoEscolarCandidato.";

        echo "<br>Possui telefone $telefoneCandidato e nasceu no dia $dataNascimentoCandidato.";

        echo "<br>Mora em/no $bairroCandidato e reside no estado $estadoCandidato";

        echo "<br> Seu responsável se chama $nomeResponsavelCandidato cujo telefone é $telefoneResponsavelCandidato e possui sexo $sexoResponsavel";
    }
    echo " <a href='inscricoes.php'>voltar para o formulário</a>";
?>