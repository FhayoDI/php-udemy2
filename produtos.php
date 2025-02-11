<?php
$preço = readline("digite o preço do produto ");
(int)$preço;
 echo " Digite:
1 para: À vista em dinheiro com 10% de desconto.
2 para: À vista no cartão com 5% de desconto.
3 para: Em 2 vezes, preço normal da etiqueta.
4 para: Em 3 vezes, preço normal da etiqueta com juros de 10%. \n";
 $condicao = readline();
  if ($condicao == 1) {
      echo "Você vai pagar " . $preço * 0.9 . "R$";
  } elseif ($condicao == 2) {
      echo "você vai pagar " . $preço * 0.85 . "R$";
  } elseif ($condicao == 3) {
      echo "$preço";
  } elseif ($condicao == 4) {
      echo "você vai pagar " . $preço + ($preço * 0.1);
  }


