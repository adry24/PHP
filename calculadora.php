<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            break;

        case 'resta':
            $resultado = $num1 - $num2;
            break;

        case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;

        case 'division':
            $resultado = $num1 / $num2;
            break;

        default:
            $resultado = "Sin Resultado";
            break;
    }
    echo 'El resultado de la ' . $operacion . ' es:' . ' ' . $resultado;
}
