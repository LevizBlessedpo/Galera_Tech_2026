<?php
// Inicia a Sessão
session_start();

// Guardando nome
$_SESSION["nome"] = "Vandervildo";
$_SESSION["produto"] = "Geladeira";

if (isset($_GET["01"])) {
    echo "Destroyed !!!, you get out of the system.";
} else {
    echo "Sessão Criada !";
}

?>