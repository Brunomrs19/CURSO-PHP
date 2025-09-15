<?php
//Datas d, D, m, M, y, Y, l, h, H:i:s

date_default_timezone_set('America/Sao_Paulo');
//echo date('d/m/y H:i:s');


//Se eu quiser adicionar essa data no database
$data = date('Y-m-d');
$dataTime = date('Y-m-d H:i:s');


//TIME
$tempo = time();
echo date('d/m/Y', $tempo);
echo "<hr>";


// MKTIME = datas passadas ou futuras
$data_pagamento = MKTIME(15, 30, 00, 02, 15, 2029);
echo date('d/m - h:i', $data_pagamento);


//STRTOTIME = Converte string em data
$date = '2025-09-15 13:30:00';
$date = strtotime($date);
echo '<hr>';

echo date('d/m/Y', $date);