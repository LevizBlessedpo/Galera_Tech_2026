<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscreva-se</title>
</head>

<body>
    <h1>Pré inscrição - Teste</h1>
    <hr>
    <br>
    <form action="dados.php" method="post">
        <!-- Todos os campos de inscrição -->
        <label>Nome do Candidato: </label>
        <input type="text" name="nomeCandidato">

        <br>
        <br>

        <label>CEP: </label>
        <input type="number" name="cepCandidato" placeholder="00000-000">

        <br>
        <br>

        <label>CPF do candidato: </label>
        <input type="number" name="cpfCandidato" placeholder="000.000.000-00">

        <br>
        <br>

        <label>Endereço: </label>
        <input type="text" name="enderecoCandidato">

        <br>
        <br>

        <label>Bairro Candidato: </label>
        <input type="text" name="bairroCandidato">

        <br>
        <br>

        <label>Estado: </label>
        <input type="text" name="estadoCandidato" placeholder="SP/São Paulo">

        <br>
        <br>

        <label>Telefone do candidato:</label>
        <input type="number" name="telefoneCandidato" placeholder="(00) 000000000">

        <br>
        <br>

        <label>Data de Nascimento:</label>
        <input type="date" name="dataNascimento" placeholder="00/00/0000">

        <br>
        <br>

        <label>CIN do candidato: </label>
        <input type="number" name="cinCandidato" placeholder="000.000.000-00">
        
        <br>
        <br>

        <label>Sexo do Candidato:</label>
        <select name="Sexo">
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="não desejo informar">Não desejo informar</option>
        </select>

        <br>
        <br>

        <label>Escola do Candidato:</label>
        <input type="text" name="escolaCandidato">

        <br>
        <br>

        <label>Série escolar: </label>
        <input type="text" name="serieEscolar">
        <label>Turno escolar: </label>
        <input type="text" name="turnoEscolar">

        <br>
        <br>

        <hr>

        <h1>Dados responsável: </h1>

        <br>

        <label>Nome do responsável: </label>
        <input type="text" name="nomeResponsavel">

        <br>
        <br>

        <label>Sexo do responsável: </label>
        <select name="sexoResponsavel"> <!-- O select abre uma caixa de seleção -->
            <option value="">Selecione</option> <!-- Abre uma opção para ser escolhida -->
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>

        <br>
        <br>

        <label>Telefone responsável: </label>
        <input type="number" name="telefoneResponsavel" placeholder="(00) 000000000">

        <br>
        <br>

        <input type="submit" value="Mandar Dados">
        <input type="reset" value="Limpar Dados">
    </form>
</body>

</html>