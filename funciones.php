<?php 

/*FUNCION ANONIMA*/
function() {
    return "Hola";
};


//--------------------------------------------------------------

$saludo = function() {
    return "Hola que tal";
};

echo $saludo();

//--------------------------------------------------------------

function decir ($algo) {
    echo $algo();
}

decir(function(){
    return "Esto es algo";
});

//--------------------------------------------------------------

$colorCoche = 'rojo';

$mostrarColor = function() use ($colorCoche) {
    echo "El color del coche es $colorCoche";
};

$mostrarColor();

//--------------------------------------------------------------

$colorCoche = 'rojo';

$mostrarColor = function() use ($colorCoche) {
    $colorCoche = 'azul';
};

$mostrarColor();
echo $colorCoche;

//-----------------------------------------------------------------

// Las clausuras también aceptan argumentos normales
$mensaje = "¿Qué tal?";
$saludar = function ($saludo) use ($mensaje) {
    echo $saludo . ', ' . $mensaje;
};
$saludar("Hola"); // Devuelve: Hola, ¿Qué tal?

//----------------------------------------------------------------

$saludo = function($nombre)
{
    printf("Hola %s\r\n", $nombre);
};

$saludo('Carlos'); // Devuelve Hola Carlos
call_user_func($saludo, "PHP"); // Devuelve Hola PHP

//--------------------------------------------------------------------

function mostrarColor() {
    echo 'Rojo';
}
class Numeros {
    static function mostrarNumero()
    {
        echo "5";
    }
}

call_user_func('mostrarColor');  // Muestra rojo

call_user_func(array('Numeros', 'mostrarNumero')); // Muestra 5
// Esta forma de llamar al método es estática.
// Si el método no fuera static, con esta forma generaría un error
// Strict Standards, non-static method should not be called statically

// Llamada a un método estático o no estático:
$numeros = new Numeros;
call_user_func(array($numeros, 'mostrarNumero')); // Muestra 5

// Llamada a un método estático:
call_user_func('Numeros::mostrarNumero'); // Muestra 5



?>