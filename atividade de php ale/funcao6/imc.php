<?php
echo '<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';

$peso = $_GET['peso'];
$altura = $_GET['altura'];

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "<h1>IMC de $imc Abaixo do peso</h1>";
} else if($imc < 24.9){
    echo "<h1>IMC de $imc normal</h1>";
}else if($imc < 29.9){
    echo "<h1>IMC de $imc sobre peso</h1>";
}else if($imc < 34.9){
    echo "<h1>IMC de $imc obesidade 1 grau</h1>";
}elseif ($imc <39.9) {
    echo "<h1>IMC de $imc obesidade grau 2</h1>";
}elseif ($imc >= 40 ) {
    echo "<h1>IMC de $imc Obesidade mórbia</h1>";
}
