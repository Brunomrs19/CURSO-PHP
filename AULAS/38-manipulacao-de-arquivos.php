<?php

/*
fopen() = abrir o arquivo no código (modo leitura, escrita, etc.)
fclose() = fecha o arquivo depois de usar
fwrite() = insere conteúdo dentro do arquivo
!feof() = usado em loops, verifica se ainda não chegou ao fim do arquivo
fgets() = lê uma linha do arquivo por vez
filesize = retorna o tamanho do arquivo em bytes
*/

$arquivo = 'arquivo.txt';
$conteudo = "Conteudo de teste\n"; // \n para pular linha

// abrir arquivo no modo 'a' (append) → escreve no final sem apagar o que já existe
$arquivoAberto = fopen($arquivo, 'a'); 

// inserir conteúdo no arquivo
fwrite($arquivoAberto, $conteudo); 

// fechar o arquivo depois de inserir
fclose($arquivoAberto); 

// abrir arquivo no modo 'r' (read) → só leitura
$arquivoAberto = fopen($arquivo, 'r');

// enquanto não chegar no fim do arquivo (!feof)
while (!feof($arquivoAberto)) {
    // ler uma linha do arquivo
    $linha = fgets($arquivoAberto, filesize($arquivo));
    echo $linha . "<br>";
}

// fechar o arquivo depois da leitura
fclose($arquivoAberto);


