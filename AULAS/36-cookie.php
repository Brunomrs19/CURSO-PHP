<?php
// Cookie é um arquivo de texto que pode ser visualizado pelo navegador

// Criar um cookie
setcookie('user', 'Bruno Mario', time()+3600);
setcookie('email', 'brunomario@gmail.com', time()-3600);
setcookie('ultima_pesquisa', 'tenis nike', time()+3600);

echo $_COOKIE['user'];