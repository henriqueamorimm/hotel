<?php


function getNome() {
    $caminho_arquivo = 'HotelData/user.json';
    $dados_usuario = lerArquivoJSON($caminho_arquivo);
    return $dados_usuario['nome'] ?? null;
}

function getRoom() {
    $caminho_arquivo = 'HotelData/user.json';
    $dados_usuario = lerArquivoJSON($caminho_arquivo);
    return $dados_usuario['room'] ?? null;
}

function getIdade() {
    $caminho_arquivo = 'HotelData/user.json';
    $dados_usuario = lerArquivoJSON($caminho_arquivo);
    return $dados_usuario['idade'] ?? null;
}


// Função auxiliar para ler o arquivo JSON e retornar os dados
function lerArquivoJSON($caminho_arquivo) {
    if (file_exists($caminho_arquivo)) {
        $dados_json = file_get_contents($caminho_arquivo);
        $dados_usuario = json_decode($dados_json, true);
        return $dados_usuario !== null ? $dados_usuario : [];
    } else {
        return [];
    }
}

?>
