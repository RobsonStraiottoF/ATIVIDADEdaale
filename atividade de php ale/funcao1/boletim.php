<?php
echo '<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';

$v1 = isset($_POST['nota1']) ? $_POST['nota1'] : null;  
$v2 = isset($_POST['nota2']) ? $_POST['nota2'] : null;
$v3 = isset($_POST['nota3']) ? $_POST['nota3'] : null;
$v4 = isset($_POST['nota4']) ? $_POST['nota4'] : null;

$media = ($v1 + $v2 + $v3 + $v4) /4;

if ($media >= 7) {
    echo "<div class='container'>
    <div class='row'>
            <div class='mt-5'>
            <h1>Você passou!!! Com a média de: $media</h1>
            </div>
            <div class='mb-4'>
            <img src='parabens.jpeg' class='rounded mx-auto d-block'>
            </div>
        </div>
    </div>";

 
} else {

  echo '<div class="container">
          <div class="row">
            <form action="" method="POST" class="mx-auto shadow p-3 mb-5 bg-body-tertiary rounded col-md-6 mt-5">
              <div class="mb-3">
                <label for="text" class="form-label">Digite a nota do exame:</label>
                <input type="number" id="exame" name="exame" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>';

  
}

if (isset( $_POST['exame'])) {
    
    $n = $_POST['exame'];

    $mdNota = ($n +  $media) /2;

    if ($mdNota >= 5) {
        echo "<div class='container'>
    <div class='row'>
            <div class='mt-5'>
            <h1>Você passou!!! Com a média de: $mdNota</h1>
            </div>
            <div class='mb-4'>
            <img src='parabens.jpeg' class='rounded mx-auto d-block'>
            </div>
        </div>
    </div>";
    } else {
        echo "<div class='container'>
            <div class = 'row'>
                <div class='mt-5'>
                    <h1> reprovado com $mdNota || se esforce mais da próxima!!!</h1>
                </div>
                <div = class = 'mb-4'>
                <img src='https://s2-crescer.glbimg.com/UdmBXUVEeIxpULq8zZTE92cuuWo=/0x0:620x452/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_19863d4200d245c3a2ff5b383f548bb6/internal_photos/bs/2022/4/B/cJxJgPSRqFnsABA0C6JA/2013-02-08-shutterstock-100124981.jpeg' img-thumbnail'>
                </div>
            </div>
        </div>";
    }
    
}
?>