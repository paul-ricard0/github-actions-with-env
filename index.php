<?php

    // Verifica se o arquivo .env existe
    if (!file_exists('.env')) {
        die('Arquivo .env não encontrado.');
    }

    // Carrega o conteúdo do arquivo .env
    $envContent = file_get_contents('.env');

    // Converte o conteúdo do arquivo em um array associativo
    $envVars = parse_ini_string($envContent);

    // Verifica se a variável "NOME" existe no array
    if (!isset($envVars['NOME'])) {
        die('A variável "NOME" não está definida no arquivo .env.');
    }
    
    // Obtém o valor da variável "NOME"
    $nome = $envVars['NOME'];
?>