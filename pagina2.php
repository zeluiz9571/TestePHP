<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estações do ano!</title>
</head>
<body>
<?php
        $dia = 21;
        $mes = 12;

        switch($mes){
            case 1:
            case 2:
            case 3:
                if($mes == 3 and $dia >= 20){
                    echo "<p>Outono</p>";
                    echo "<img src='img/outono.png'>";
                } else{
                    echo "<p>Verão</p>";
                    echo "<img src='img/verao.png'>";
                }
                break;
            case 4:
            case 5:
            case 6:
                if($mes == 6 and $dia >= 21){
                    echo "<p>Inverno</p>";
                    echo "<img src='img/inverno.png'>";
                }else{
                    echo "<p>Outono</p>";
                    echo "<img src='img/outono.png'>";
                }
                break;
            case 7:
            case 8:
            case 9:
                if($mes == 9 and $dia >= 23){
                    echo "<p>Primavera</p>";
                    echo "<img src='img/primavera.png'>";
                } else {
                    echo "<p>Inverno</p>";
                    echo "<img src='img/inverno.png'>";
                }
                break;
            case 10:
            case 11:
            case 12:
                if($mes == 12 and $dia >= 22){
                    echo "<p>Verão</p>";
                    echo "<img src='img/verao.png'>";
                } else {
                    echo "<p>Primavera</p>";
                    echo "<img src='img/primavera.png'>";
                }
                break;
            default:
                echo "<p>Mês " .$mes. " incorreto!</p>";
        }

    ?>

</body>
</html>