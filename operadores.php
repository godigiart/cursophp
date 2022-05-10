/*OPERADORES ARITMETICOS*/

+$a 	Identidad 	Conversión de $a a int o float según el caso.
-$a 	Negación 	Opuesto de $a.
$a + $b 	Adición 	Suma de $a y $b.
$a - $b 	Sustracción 	Diferencia de $a y $b.
$a * $b 	Multiplicación 	Producto de $a y $b.
$a / $b 	División 	Cociente de $a y $b.
$a % $b 	Módulo 	Resto de $a dividido por $b.
$a ** $b 	Exponenciación 	Resultado de elevar $a a la potencia $bésima. Introducido en PHP 5.6.

/*OPERADORES DE COMPARACION*/

$a == $b 	Igual 	true si $a es igual a $b después de la manipulación de tipos.
$a === $b 	Idéntico 	true si $a es igual a $b, y son del mismo tipo.
$a != $b 	Diferente 	true si $a no es igual a $b después de la manipulación de tipos.
$a <> $b 	Diferente 	true si $a no es igual a $b después de la manipulación de tipos.
$a !== $b 	No idéntico 	true si $a no es igual a $b, o si no son del mismo tipo.
$a < $b 	Menor que 	true si $a es estrictamente menor que $b.
$a > $b 	Mayor que 	true si $a es estrictamente mayor que $b.
$a <= $b 	Menor o igual que 	true si $a es menor o igual que $b.

/*OPERADORES LOGICOS*/

! $a 	Not (no) 	true si $a no es true.
$a && $b 	And (y) 	true si tanto $a como $b son true.
$a || $b 	Or (o inclusivo) 	true si cualquiera de $a o $b es true.