<?php
// Etiqueta de apertura

/*
Comentario de 
más de una línea
*/

// Declarando una variable llamada num1 y asignándole un valor de 10
$num1 = 9;
$num2 = 15;

// Mostrar en pantalla la suma de las variable num1 y num2
echo $num1 + $num2 . "<br>";
echo $num1 * $num2 . "<br>";
echo $num1 - $num2 . "<br>";
echo $num1 / $num2 . "<br>";

// Si el valor de la variable num1 es igual a 10
if ($num1 == 10) {
	// entonces imprimir el texto "El valor es correcto"
	// echo "El valor es correcto";
}

// Si el valor de la variable num1 es igual a 10
if ($num1 == 10) {
	// echo "El valor es correcto";
} else {
	// echo "El valor es incorrecto";
}

if ($num1 == 9) { // Igual que 9
	// echo "El valor de num1 es 9";
} elseif ($num1 >= 10) { // Mayor o igual que 10
	// echo "El valor de num1 es mayor 9";
} else {
	// echo "El valor de num1 es menor 9";
}

// Variable -> Con muchos valores especificos

$dia = date('N');
// Domingo -> 1
// Lunes -> 2
// ..

switch ($dia) {
	case 1: echo "El dia es Domingo"; break;
	case 2: echo "El dia es Lunes"; break;
	case 3: echo "El dia es Martes"; break;
	case 4: echo "El dia es Miércoles"; break;
	case 5: echo "El dia es Jueves"; break;
	case 6: echo "El dia es Viernes"; break;
	case 7: echo "El dia es Sábado"; break;
	default: echo "Hubo un error en el sistema"; break;
}



// Tipos de datos
// Numéricos (Enteros, Integer): 10, -5, 3
// Doubles (Float) : 10.50, 3/4
// String (Textos)
// Boolean (Verdadero o Falso)
// Null 

if (10 === '10') {
	//echo 'Comparando';
}

// echo gettype('10');

// Etiqueta de cerradura
?>