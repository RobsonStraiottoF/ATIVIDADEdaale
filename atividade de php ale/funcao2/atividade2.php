<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fução 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row">
    <form action="seusalario.php" method="POST" class="mx-auto shadow p-3 mb-5 bg-body-tertiary rounded col-md-6 mt-5">
        <div class="mb-3">
            <label for="text" class="form-label">Digite seu Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Digite seu Salário:</label>
            <input type="text" id="salario" name="salario" class="form-control">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Digite seu total de Vendas neste mês:</label>
            <input type="text" id="vendas" name="vendas" class="form-control">
        </div>
        <button type="subimit" class="btn btn-primary">Verificar</button>
    </form>
</div>
</div>
</body>
</html>