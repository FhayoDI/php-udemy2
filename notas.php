<?php
$nota1 = readline("insira a nota 1: ");
$nota2 =readline("insira a nota 2: ");
$aritmetica = ($nota1 +$nota2) /2;
 if (@$aritmetica >= 6) {
     echo "você for aprovado com a media: $aritmetica ";
 }   else {
     echo "você foi reprovado com a media: $aritmetica ";
 }