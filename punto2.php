<h1>"Indice de masa corporal"</h1>
<?php

$peso = 88;
$altura = 1.80;

$imc = $peso / ($altura * $altura);
echo("Su peso es de: " . $peso . "Kg");
echo("<br>Su altura es de: " . $altura . "M");
echo("<br>Su indice de masa masa corporal es de: " . $imc);

echo("<br>");

if($imc < 18.5)
{
    echo "Peso insuficiente";
}
else if($imc > 18.4 && $imc < 25)
{
    echo "Peso normal";
}
else if($imc > 24.9 && $imc < 27)
{
    echo "Sobrepeso: Grado I";
}
else if($imc > 26.9 && $imc < 30)
{
    echo "Sobrepeso: Grado II";
}
?>