<?php
//Estrutura de Decisão
$idade = 16;
$nome = "Pedro";

 // Pergunta: Se a idade é igual a 15 bom dia
if($idade == 16) {
    //verdadeiro
    echo "Verdadeiro";
} else {
    // Falso
    echo  "Falso";
}

echo "<hr>";
// && E = Ambos precisam ser verdade
// || Ou = basta um ser verdade

if ($nome == "Pedro" || $idade == 15) {
    echo "Seu nome é Pedro!!";
} else {
    echo "Falso";
}
?>