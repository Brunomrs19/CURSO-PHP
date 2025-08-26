<?php
session_start();

echo $_SESSION['carro'].'<br>'.$_SESSION['cor'].'<br>'.session_id();

/*
A sessão realmente é finalizada (destruída) quando o navegador é fechado. 
Isso porque o cookie de sessão (PHPSESSID) é um cookie de sessão, que é temporário e
não persistente.


Se você abrir diretamente o home.php depois de fechar e reabrir o navegador,
ele não vai encontrar os dados da sessão (carro e cor) porque a sessão não existe mais.
O index.php é o script que cria e armazena esses dados.


A sessão em si não é o que o navegador armazena, mas sim uma identificação única
(o session_id()) que é enviada para o navegador em um cookie.


Os dados da sessão ($_SESSION) não ficam no navegador. 
Eles são armazenados em um arquivo temporário no servidor.
O navegador só tem o ID para se conectar a esses dados.



o tempo de vida de uma sessão pode ser configurado. 
É possível aumentar o tempo de vida do cookie de sessão (session.cookie_lifetime) 
para que ele persista mesmo depois do navegador ser fechado.
Isso é o que sites como o Facebook fazem para manter você logado.


Para finalizar uma sessão manualmente, você pode usar as funções session_unset() 
(para remover as variáveis da sessão) e
session_destroy() (para destruir o arquivo de sessão no servidor).
*/
