<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Paciente</title>
</head>
<body>
    <h1>Cadrastro de Recém-Nascidos</h1>
    <!--O formulário é usado quando queremos guardar alguma coisa-->
    <form action="dados.php" method="post"> <!--Método (post) serve para mandar uma informação o método POST é geralmente mais seguro do que o GET -->
        <label>Nome do Bebe:</label> <!-- Serve para colocarmos um rótulo para o formulário -->
        <input type="text" name="nomeBebe"> <!--O input abre uma caixa para escrevermos dentro -->
        
        <br>

        <label>Sexo do Bebê:</label>
        <select name="Sexo"> <!-- O select abre uma caixa de seleção -->
            <option value="">Selecione</option> <!-- Abre uma opção para ser escolhida -->
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>
        
        <br>

        <label>Data de Nascimento:</label>
        <input type="date" name="dataNascimento">
        
        <br>

        <label>Hora de Nascimento:</label>
        <input type="time" name="horaNascimento">
        
        <br>

        <label>Peso ao nascer (KG):</label>
        <input type="number" name="peso" step="0.0001"> <!-- A máquina começa a contagem apartir de 0.0001 (step) ajuda na responsividade do usuário -->
        
        <br>

        <label>Tipo sanguíneo:</label>
        <input type="text" name="tipoSanguineo" placeholder="0-"> <!-- placeholder serve como máscara -->
        
        <br>

        <label>Observação</label>
        <!-- textarea abre uma área de textos com um número de linhas e colunas especificos -->
        <textarea name="observacao" spellcheck="false" rows="5" cols="50"></textarea> <!-- rows é o número de linhas (largura) e cols representa o número de colunas (altura) -->
        
        <br>

        <input type="submit" value="Mandar Dados">
        <input type="reset" value="Limpar Dados">
    </form>
</body>
</html>