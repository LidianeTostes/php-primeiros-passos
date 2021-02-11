<?php
//exibir a tabuada de determinado número. Ou seja, temos um número armazenado em uma variável qualquer,
// e queremos exibir o resultado da sua multiplicação de 1 até 9.

$num = 2;
for ($i=1; $i<=10; $i++){
    echo "$num * $i = " . $num * $i . PHP_EOL;

}
