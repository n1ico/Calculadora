<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
 <div class="container">
    <div id="contorno">
       <div class="conteiner">
<?php 

 if (isset($_GET['operacao']) && isset($_GET['x']) && isset($_GET['y'])){

 if($_GET['operacao']== "adicao"){
     echo $_GET['x'] + $_GET['y'];
}

 else if($_GET['operacao'] == "subtracao"){
    echo $_GET['x'] - $_GET['y'];
}

 else if($_GET['operacao']== "multiplicacao"){
    echo $_GET['x'] * $_GET['y'];
}

 else if($_GET['operacao']== "divisao"){
    echo $_GET['x'] / $_GET['y'];
}}

 else echo "<h1>Nenhuma das opções foi selecionada.</h1>"
 
?>
</div>
</div>
</body>
</html>