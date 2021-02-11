<?php

$idade = 34;
$email = "lidiane_tostes@hotmail.com";
//com aspas simples -> para juntar concatenar uma string com outro tipo, separamos com (.)
//echo 'Olá mundo! Minha idade é ' . $idade . ' anos';

//com aspas dupla não é necessário usar o ponto para concatenar

//quebra de linha = \n ou .PHP_EOL-> este último melhor para qualquer tipo de sistemas operacionais
// caracteres especiais php  = https://www.php.net/manual/pt_BR/language.types.string.php
echo "Olá mundo! \n";
echo "Minha idade é $idade anos, meu e-mail é $email";