<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Declaração de variável
        $hora = date("H");

        if($hora < 12){
            echo "<p>Bom Dia!</p>";
        }else if($hora < 18){
            echo "<p>Boa tarde à todos</p>";
        }else{
            echo "<p>Boa noite!</p>"
        }

    ?>
</body>
</html>