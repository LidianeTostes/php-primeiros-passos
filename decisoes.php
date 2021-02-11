<?php

//em php podemos usar  || e or para o operador (ou)
//em php podemos usar  && e and para o operador (e)

$idade = 17;
$nome = "Lidiane";
$numeroDePessoas = 2;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho" . PHP_EOL;

} else if($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos. Pode entrar acompanhado(a) " . PHP_EOL;

} else{
        echo "Você tem $idade anos. Não pode entrar" . PHP_EOL;
}

