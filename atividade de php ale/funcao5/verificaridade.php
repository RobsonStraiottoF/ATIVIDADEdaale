<?php
echo '<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';

$idade = isset($_POST['idade']) ? $_POST['idade'] : null;
$verificacao = ($idade < 18) ? "é de menor" : "é de maior";
echo "<div class='container'>
    <div class='mt-5'>
           <h1>você é de $verificacao</h1>
            </div>
            </div>";