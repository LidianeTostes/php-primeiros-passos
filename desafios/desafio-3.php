<?php
//IMC = Peso ÷ (Altura × Altura)

//IMC	Resultado
//Menos do que 18,5	Abaixo do peso
//Entre 18,5 e 24,9	Peso normal
//Entre 25 e 29,9	Sobrepeso
//Entre 30 e 34,9	Obesidade grau 1
//Entre 35 e 39,9	Obesidade grau 2
//Mais do que 40	Obesidade grau 3

$peso = 73;
$altura = 1.71;

$imc = $peso / ($altura * $altura);

echo "Seu IMC é : $imc  " . PHP_EOL;

if($imc < 18.5){
    echo "Voce está abaixo do peso";
} elseif ($imc > 18.5 && $imc < 24.9){
    echo "Voce está no seu peso normal";
} elseif ($imc > 24.9 && $imc < 29.9){
    echo "Voce está com sobrepeso";
} elseif ($imc > 29.9 && $imc < 34.9){
    echo "Voce está com obesidade I";
} elseif ($imc > 34.9 && $imc < 39.9){
    echo "Voce está com obesidade II";
} elseif($imc > 40){
    echo "Voce está com obesidade III";
}


