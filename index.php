<?php

// Incluir o Composer
require 'vendor/autoload.php';

// Chamar o método para carregar as variáveis de ambiente
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

echo "Recuperar o ambiente: " . getenv('APP_ENV') . "<br>";
echo "Recuperar o ambiente: " . $_ENV['APP_ENV'] . "<br>";
echo "Recuperar o ambiente: " . $_SERVER['APP_ENV'] . "<br><br>";

echo "Recuperar o e-mail de suporte: " . getenv('EMAIL') . "<br>";
echo "Recuperar o e-mail de suporte: " . $_ENV['EMAIL'] . "<br>";
echo "Recuperar o e-mail de suporte: " . $_SERVER['EMAIL'] . "<br>";
?>