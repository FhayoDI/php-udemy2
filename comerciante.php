<?php
$valor =  readline("Preço do produto ");
 if ($valor < 21) {
     echo "você vai pagar " . $valor + ($valor * 0.45);
 } else {
     echo "você vai pagar " . $valor + ($valor * 0.3);
 }