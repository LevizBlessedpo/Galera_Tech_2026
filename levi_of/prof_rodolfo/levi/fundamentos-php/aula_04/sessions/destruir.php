<?php
session_start();

session_unset(); // Remove todas as váriaveis da sessão

session_destroy(); // Destroí as sessões automaticamente

echo "Sessão terminada!";
header("Location: criar.php?01"); // Envia para tela criar
?>