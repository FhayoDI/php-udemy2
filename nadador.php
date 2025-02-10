<?php
$idade = readline("Qual a sua idade? ");

$Cat = match (true) {
    $idade >= 18 =>  "Sênior",
    $idade > 14 && $idade < 18 =>  "Juvenil B",
    $idade > 10 && $idade < 14 =>  "Juvenil A",
    $idade > 7 && $idade < 11 =>  "Infantil B",
    $idade > 4 && $idade < 8 =>  "Infantil A",
    $idade < 5 => "fora de categoria",
};
var_dump($Cat);