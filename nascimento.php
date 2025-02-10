<?php
$ano = readline ("Qual ano você nasceu ");
$hoje = date('Y');
if (($hoje - $ano) >= 16) {
    echo "Voce tem: " . $hoje - $ano . " anos, já pode votar!!";
} else {
    echo "você ainda não pode votar pois tem: " . $hoje - $ano  . " anos";
}