<h3>Operadores Aritmeticos </h3>
    <?php
    $a=8;
    $b=3;
    echo  $a + $b, "<br>";
    echo  $a - $b, "<br>";
    echo  $a * $b, "<br>";
    echo  $a / $b, "<br>";
    $a++;
    echo $a, "<br>";
    $b--;
    echo $b, "<br>";
    ?>

    <h3>Operadores de Comparacion</h3>
    <?php 
    $a = 8;
    $b = 3;
    $c = 3;
    echo $a == $b ? 'true':'false', "<br>";
    echo $a != $b ? 'true':'false', "<br>";
    echo $a < $b ? 'true':'false', "<br>";
    echo $a > $b ? 'true':'false', "<br>";
    echo $a <= $c ? 'true':'false', "<br>";
    echo $a >= $c ? 'true':'false', "<br>";
    ?>

    <h3>Operadores Logicos</h3>
    <?php
    $a = 8;
    $b = 3;
    $c = 3;
    echo ($a == $b) && ($c > $b), "<br>";
    echo ($a == $b) || ($b == $c), "<br>";
    echo !($b <= $c), "<br>";
    ?>