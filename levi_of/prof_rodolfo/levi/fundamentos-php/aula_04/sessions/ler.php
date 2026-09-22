<?php
// Ler a sessão (Cookie)
session_start();
$nome = $_SESSION["nome"];
$produto = $_SESSION["produto"];

echo "Olá $nome então você quer um $produto";
?>
