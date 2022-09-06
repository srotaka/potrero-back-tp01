<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Nº1 | Silvia Otaka</title>
</head>

<body>
    <h1>Trabajo Práctico Nº 1 - Potrero Backend</h1>

    <h3> 1. Imprima por pantalla: “Hola mundo”.</h3>
    <?php echo ("¡Hola Mundo!"); ?>
    <hr>

    <h3>2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</h3>
    <?php
    $greeting = "¡Hola Mundo desde la variable!";
    echo $greeting;
    ?>
    <hr>

    <h3> 3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera.</h3>
    <?php
    $number1 = 10;
    $number2 = 5;
    echo ("{$number1} + {$number2} = " . $number1 +  $number2 . "<br>" .
        "{$number1} - {$number2} = " . $number1 -  $number2 . "<br>" .
        "{$number1} * {$number2} = " . $number1 *  $number2 . "<br>" .
        "{$number1} / {$number2} = " . $number1 /  $number2 . "<br>" .
        "{$number1} % {$number2} = " . $number1 %  $number2);
    ?>
    <hr>

    <h3>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.</h3>
    <?php
    $celsius = 20;
    $farenheit = ($celsius * 1.8) + 32;
    echo ("{$celsius}ºC equivalen a {$farenheit}º F.");
    ?>
    <hr>

    <h3>5. Implementar algoritmos que permitan:</h3>
    <h4>a. Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</h4>
    <?php
    $base = 18;
    $height = 12;
    $perimeter = (2 * $base) + (2 * $height);
    $area = $base * $height;
    echo ("Perímetro = {$perimeter} cm." . "<br>" .
        "Área = {$area} cm.")
    ?>

    <h4>b. Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</h4>
    <?php
    $radius = 30;
    $perimeter =  2 * 3.14 * $radius;
    $area = 3.14 * ($radius * $radius);
    echo ("Perímetro = {$perimeter} cm." . "<br>" .
        "Área = {$area} cm.")
    ?>

    <footer style=" position: fixed; left: 0; bottom: 0; width: 100%; background-color: #b4d4f9; color: white; text-align: center; padding:15px; font-size:18px">
        <div class="container">
            <div class="copyright text-center">                
                &copy; Copyright 2021-2022 |
                <strong><span>Silvia Otaka</span></strong> | Programming with ❤ <br />
            </div>
        </div>
    </footer>

</html>