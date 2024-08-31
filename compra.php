<?php
// producto 01
$precio01 = 35;
$cantidad01 =2;

// producto 02

$precio02 = 20;
$cantidad02 = 3;

// producto 03

$precio03 = 45;
$cantidad03 = 1;

// calculo del subtotal

$subtotal = ($precio01 * $cantidad01) + ($precio02 * $cantidad02) + ($precio03 * $cantidad03);

// calculo de los impuestos

$impuestos = $subtotal * 0.16;

// calculo del descuento

$descuento = $subtotal * 0.05;

// calculo del total

$total = $subtotal + $impuestos - $descuento;

// impresion de los resultados

echo "Subtotal: s/". ($subtotal);
echo "<br>";
echo "Impuestos: s/". ($impuestos);
echo "<br>";
echo "Descuento: s/". ($descuento);
echo "<br>";
echo "Total: s/". ($total);




