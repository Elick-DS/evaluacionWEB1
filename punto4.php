<h1>"Salario trabajador"</h1>
<?php

$horastrabajadas = 36;
$salario;

if($horastrabajadas <= 40)
{
    $salario = $horastrabajadas * 20000;
    echo "Tu salario es de: " . $salario;
}
else if ($horastrabajadas > 40) 
{
    $salario = (40 * 20000) + ($horastrabajadas - 40) * 25000;
    echo "Tu salario es de: " . $salario; 
}

?>