<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
</head>
<body>

<?php
$numero = isset($_POST['numero']) ? $_POST ['numero'] : 0;
$parImpar = isset($_POST['parImpar']) ? $_POST ['parImpar'] : 1;
$computador = rand(0,10);

$total = $computador +  $numero;

?>  

<form action = "" method = "POST">

<h1> Par ou Ímpar <h1>
<select name="numero" action = "numero">
<option value = "0">0</option>
<option value = "1">1</option>
<option value = "2">2</option>
<option value = "3">3</option>
<option value = "4">4</option>
<option value = "5">5</option>
<option value = "6">6</option>
<option value = "7">7</option>
<option value = "8">8</option>
<option value = "9">9</option>
<option value = "10">10</option>
</select>
<br>
<input value = "1" name = "parImpar" type = "radio">impar<br>
<input value = "2" name = "parImpar" type = "radio">par<br>
<input type = "submit" value = "jogar">
</form>
<?php 
    echo "<br>Total: ".$total;
    echo "<br>Computador: ".$computador;
    echo "<br>Usuário: ".$numero;
?>
   <br> 
<?php    
   echo "<img src='img/$numero.PNG'>";
    echo "<img src='img/$computador.PNG'>";
    
    if ($total % 2 == 0 && $parImpar == 2){
    echo "<br>O usuário venceu";
    }
    elseif ($total % 3 == 0 && $parImpar == 1){
        echo "<br>O usuário venceu";
        }
    elseif ($total == 1 && $parImpar == 1){
        echo "<br>O usuário venceu";
            }
    else 
    echo "<br>O computador venceu";
?>
<br>
</body>
</html>