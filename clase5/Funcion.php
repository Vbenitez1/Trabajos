<!DOCTYPE html>
<html>
<head>
<title>Calculadora PHP</title>
<meta charset="UTF-8"/>
</head>
<body>
    <form method="GET" action="operar.php">
        <input type="number" name="n1">
        <input type="number" name="n2">
        <select name="operacion">
            <option value="s">Sumar</option>
            <option value="r">restar</option>

        </select>
        <br>
        <button type="submit">=</button>
    </form>
    <h3>
        <?php
        if(!empty($_GET['m'])){
            $resul = $_GET['m'];
        }else{
            $resul = 0;
        }
        echo $resul;
        ?>
    </h3>
</body>
</html>
