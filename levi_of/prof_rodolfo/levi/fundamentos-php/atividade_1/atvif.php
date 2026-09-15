<?php
// Atividade 1: Estrutra de decisão (if/else)

$nota = 6.5;
$usuario = "admin";
$senha = 123;
$temperatura = 7;
$umidade = 26;

if($nota > 6) {
    echo "Aprovado!";
} else {
    echo "Reprovado";
}

echo "<hr>";

if($usuario == "admin" && $senha == 123) {
    echo "Seja bem-vindo ao sistema!!";
} else {
    echo "Usuário incorreto!";
}

echo "<hr>";

if ($temperatura < 6 || $umidade < 25) {
    echo "<img src='images.jpg' width='400'>";
} else {
    echo "<img src='Sol.jpg' width='420'>";
}

echo "<hr>";
// Super IF
$idade = 61;
if($idade < 0) {
    echo "A idade não pode ser negativa né flor !";
} else if ($idade < 12) {
    echo "Você é criança !";
} else if ($idade < 18) {
    echo "Você é muito XOVEEM !";
} else if($idade < 60) {
    echo "Idade do Wesley";
} else {
    echo "Acho que você está na melhor fase da vida";
}
?>
