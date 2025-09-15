<?php
/*
---------------------------------------------
AULA DE EXPRESSÕES REGULARES (REGEX) - PHP
---------------------------------------------

preg_match() = verifica se uma string bate com um padrão
^           = início da expressão
$           = fim da expressão
[]          = conjunto de caracteres permitidos
{}          = quantidade de ocorrências
?           = 0 ou 1 vez
*           = 0 ou mais vezes
+           = 1 ou mais vezes
/i          = case insensitive (não diferencia maiúsculas/minúsculas)

Exemplos de conjuntos:
[A-Z]       = letras maiúsculas
[a-z]       = letras minúsculas
[A-Za-z]    = letras maiúsculas e minúsculas
[A-Za-z0-9] = letras e números
*/

echo "<h2>Exemplos de Regex em PHP</h2>";

// -------------------------------------------- 
// 1. Validação de uma letra minúscula
$string = "h";
$padrao = "/^[a-z]$/"; // só aceita uma letra minúscula

if(preg_match($padrao, $string)) {
    echo "1. Letra minúscula válida: $string <br>";
} else {
    echo "1. Inválido <br>";
}

// -------------------------------------------- 
// 2. Validação de e-mail simples
$email = "teste@gmail.com";
$padraoEmail = "/^[a-z0-9.\-_]+@[a-z0-9\-]+\.(com|br|com.br|net)$/i";

if(preg_match($padraoEmail, $email)) {
    echo "2. E-mail válido: $email <br>";
} else {
    echo "2. E-mail inválido <br>";
}

// -------------------------------------------- 
// 3. Validação de data dd/mm/aaaa
$data = "15/09/2025";
$padraoData = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if(preg_match($padraoData, $data)) {
    echo "3. Data válida: $data <br>";
} else {
    echo "3. Data inválida <br>";
}

// -------------------------------------------- 
// 4. Validação de CPF simples (formato: 000.000.000-00)
$cpf = "123.456.789-00";
$padraoCPF = "/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/";

if(preg_match($padraoCPF, $cpf)) {
    echo "4. CPF válido: $cpf <br>";
} else {
    echo "4. CPF inválido <br>";
}

// -------------------------------------------- 
// 5. Validar senha (mínimo 6 caracteres, pelo menos uma letra e um número)
$senha = "abc123";
$padraoSenha = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/";

if(preg_match($padraoSenha, $senha)) {
    echo "5. Senha válida <br>";
} else {
    echo "5. Senha inválida <br>";
}

// -------------------------------------------- 
// 6. Procurar palavras dentro de uma string
$texto = "Hoje eu vou estudar PHP e regex";
$padraoPalavra = "/PHP/i";

if(preg_match($padraoPalavra, $texto)) {
    echo "6. A palavra 'PHP' foi encontrada no texto! <br>";
} else {
    echo "6. Palavra não encontrada <br>";
}

// -------------------------------------------- 
// 7. Substituir números por [NUM]
$texto2 = "Meu número é 12345";
$textoSubstituido = preg_replace("/[0-9]+/", "[NUM]", $texto2);

echo "7. Texto original: $texto2 <br>";
echo "   Texto substituído: $textoSubstituido <br>";
