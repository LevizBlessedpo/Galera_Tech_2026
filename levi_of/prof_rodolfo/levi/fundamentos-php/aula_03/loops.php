<?php
// Laço de repetição
// Repetir um código
// para x = 0
for ($x = 0; $x <= 10; $x++) {
    echo "Isso se repete: $x <br>";
}

echo "<hr>";


// Enquanto (While)
// Repete enquanto a condição for verdadeira
$i = 0;
while($i <= 5) {
    echo "<script>";
    echo "var janela = window.open('','','width=300,height=200')";
    echo "const janela =janela.document.write('oi')";
    echo "</script>";
    $i++;
    // Liberar os pop-ups do navegador
}
?>