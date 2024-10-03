<!DOCTYPE html>
<html>
    <head>
        <title>Edad</title>
        <meta charset="UTF-8"/>
    </head>

    <body>
        <?php
        $edad = 120;
        if ($edad >=18 && $edad <=120){
            echo ("Eres mayor de Edad con "),$edad,("años");
        }else if($edad <18 && $edad >=0){
            echo ("Solo tienes "),$edad,(",Eres un menor");
        }else{
            echo("Indique un valor real");
        }
        ?>
    </body>
</html>