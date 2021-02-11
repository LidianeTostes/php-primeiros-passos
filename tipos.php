<?php

// PHP é uma linguagem dinamicamente tipada, não precisamos declarar o tipo, ele reconhece automáticamente

$idade = 21;
echo gettype($idade);

//número fracionário representa com ponto (.)
$salario = 1250.50;
echo gettype($salario);


$texto = "Olá mundo!";
echo gettype($texto);


$verdadeiro = true;
$falso = false;
echo gettype($verdadeiro);
echo gettype($falso);