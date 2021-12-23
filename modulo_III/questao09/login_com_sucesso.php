<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login com sucesso</title>
</head>
<body>

<?php
    $nome = $_GET['s'];
?>
<div class="container justify-content-center w-50 mt-5">
    
            <div class="card" style="width: 18rem;">
                <img src="https://i2.wp.com/faculdadedelta.com.br/wp-content/uploads/2020/03/desenvolvimento-de-pessoas-a-chave-para-o-sucesso-da-sua-empresa.jpg?w=720&ssl=1" class="card-img-top" alt="Login com Sucesso">
            <div class="card-body">
                <h5 class="card-title text-success fw-bold text-center"><span class="text-warning"><?=$nome?></span><br> Login com sucesso!! :D</h5>
                <p class="card-text">Os dados inseridos se encontram em nosso banco de dados.</p>
                <a href="frontend.php" class="btn btn-primary" >Voltar</a></span>
            </div>
            </div>

</div>

</body>
</html>