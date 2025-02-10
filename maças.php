<?php
$maca = readline(" quantas maças você comprou? mais de 12 fica por 1 real ");
 if ($maca >=12){
     echo "o preço final é: ";
     echo $maca;
 }  else {
     echo "o preço final é: ";
     echo $maca * 1.30 . " centavos";
 }