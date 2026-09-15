<?php
//arquivo: identificador_navegador.php

$ua = $_SERVER['HTTP_USER_AGENT'] ?? ''; //variável que diz qual o navegador o usuário está utilizando
$navegador = 'Desconhecido';
$logoNavegador = 'Nenhum';

//Área dos IFs de determinação do navegador do usuário
if (stripos($ua, 'Firefox') !== false) {
    $navegador = 'Mozilla FireFox';
    $logoNavegador = "img/firefox_logo_2019.svg";

} elseif (stripos($ua, 'Edg') !== false) {
    $navegador = 'Microsoft Edge';
    $logoNavegador = "img/Edge_logo.jpg";

} elseif (stripos($ua, 'Chrome') !== false && stripos($ua, 'Edg') === false) {
    $navegador = 'Google Chrome';
    $logoNavegador = "img/chrome_logo.jpg";

} elseif (stripos($ua, 'Safari') !== false && stripos($ua, 'Chrome') === false) {
    $navegador = 'Apple Safari';
    $logoNavegador = 'img/safari_logo.png';
    
} elseif (stripos($ua, 'Trident') !== false || stripos($ua, 'MSIE') !== false) {
    $navegador = 'Internet Explorer (legado)';
    $logoNavegador = 'img/internet_explorer.jpg';
}

echo "<h2>Identificação de Software:</h2>";
echo "Navegador detectado: <strong>" . $navegador . "</strong><br>";
echo "<br> <img src=$logoNavegador alt=$navegador width=200>";
// Salvar uma logo para cada navegador - Firefox, Edge, Chrome, Safari, Internet Explorer
// Exibir a logo de cada navegador usando echo e a tag HTML <img src....
?>