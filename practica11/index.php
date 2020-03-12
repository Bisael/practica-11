<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica11-variables</title>
</head>
<body>
    <h1>variables</h1>
    <?php
    $nombre='Raymundo Bisael Maza Lopez';
    $edad=22; 
    $beca=300.00;
    $estatus=true;
    echo 'tipo de variables <br/>';
    echo $nombre.'<br/>';
    echo $edad.'<br/>';
    echo $beca.'<br/>';
    echo $estatus.'<br/>';
    echo $nombre.'tiene'.$edad.'años de edad y gana'.$beca'<br/>';
    ?>
    <h1>operadores aritmeticos</h1>
    <?php
    $numero1=10;
    $numero2=5;
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplica=$numero1*$numero2;
    $division=$numero1/$numero2;
    echo 'la suma es='.$suma.'<br/>';
    echo 'la suma es='.$numero1+$numero2.'<br/>';
    echo 'la resta es='.$numero1-$numero2.'<br/>';
    echo 'la multiplicacion es='.$multiplica.'<br/>';
    echo 'la division es='.$division.'<br/>';
    echo 'el incremento de suma'.$suma++.'<br/>';
    echo 'decremento de suma'.$suma--.'<br/>';
    echo 'el residuo es='.$numero1%$numero2;
    ?>
</body>
</html>