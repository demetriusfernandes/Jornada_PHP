<?php
    #recupera o arquivo com os logins
    $logins = file("dados.txt");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Manipulação - Questão 09</title>
</head>
<body>

<div class="container justify-content-center w-50">
            <div>
                <h2 class="text-center mt-4">Login do usuário</h2>
                <form action="backend.php" method="POST">
                    <label for="nome">Nome</label>
                        <input class="form-control"  type="text" name="nome" value=""><br>
                    <label for="nome">Senha</label>
                        <input class="form-control" type="text" name="senha" value=""><br>
                    <input type="submit" class="btn btn-primary" value="Logar" placeholder="Logar">
                    <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Ver Logins de teste
  </button>
<div class="collapse w-50" id="collapseExample">
  <div class="card card-body">
  <table class="table  table-sm">
                <thead>
                    <th>Nome</th>
                    <th>Login</th>
                </thead>
                <tbody>
                    <?php 
                        foreach ($logins as $produto) {
                            #quebrar a string
                            $dado = explode(" - ", $produto);
                    ?>
                        <tr>
                            <td><?=$dado[0];?></td>
                            <td><?=$dado[1];?></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
  </div>
</div>
                </form>
                
            </div>
</div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

