<?php
echo '<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';

$Va = $_GET['A'];
$Vb = $_GET['B'];

$Vc = $Va;

$Va = $Vb;

$Vb = $Vc;

echo "<div class='container'>
    <div class='mt-5'>
           <h1> o valor de A agora é: $Va e o valor B agora é: $Vb </h1>
            </div>
            </div>";