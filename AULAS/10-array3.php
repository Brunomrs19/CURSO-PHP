<?php

// Array numérico = qnd indice ou as chave (key) é um numero

// Array associativo = qnd é string

$pessoa = ["nome" => "Bruno",
 "idade" => 23,
  "altura" => 1.75
];

$pessoa["cidade"] = "brasilia";
$pessoa[0] = "tentando colocar indice numerico";

echo "<pre>";
print_r($pessoa);
echo "<pre>";

echo "<hr>";

$rank = [
    "primeiro" => "fla",
     "segundo" => "vasco",
      "terceiro" => "corinthians"
    ];

foreach ($rank as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
};


// Array multidimensionais = array que contem um ou mais arrays

$times = [
    "cariocas"=> [
        "Flamengo",
        "Bangu",
        "Volta redonda"
    ],
    "paulistas" => [
        "sp",
        "botafogo-sp",
        "santos"
    ]
];

//como não foi criado índice, ele por padrão criou numéricos 
echo $times["cariocas"][0]."<br>";

foreach($times["paulistas"] as $indice => $key) {
    echo $indice." ".$key."<br>";
};