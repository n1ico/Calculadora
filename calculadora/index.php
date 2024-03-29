<?php
    $x = 0;
    $y = 0;
    $resultado = 0;
    $calcular = 'adicao';
    if(isset($_GET['x'], $_GET['y'], $_GET['calcular'])){
        $num1 = $_GET['x'];
        $num2 = $_GET['y'];
        $calcular = $_GET['calcular'];

        switch($calcular){
            case 'adicao':
                $resultado = $x + $y;
                break;
            case 'subtracao':
                $resultado = $x - $y;
                break;
            case 'multiplicacao':
                $resultado = $x * $y;
                break;
            case 'divisao':
                $resultado = $x / $y;
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora simples</title>
</head>
<body>
    <form>
        <h3> Calculadora simples: </h3>
        <br><br>
        Valor um :
        <br>
        <input type="number" name="x"><br>
        Valor dois :
        <br>
        <input type="number" name="y">
        <br><br>
        <select name="calcular">
            <option value="adiacao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Dividisão</option>
        </select>
        <input type="submit" value="calcular">
        <br><br>
        <p>O resultado é <?= $resultado ?></p>
    </form>
</body>
</html>
