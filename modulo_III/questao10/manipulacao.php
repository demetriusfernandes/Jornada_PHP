<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação - Questão 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Manipulação - Questão 10</title>
</head>
<body>
<div class="container justify-content-center w-50">
            <div>
                <h2>Cadastro de usuários</h2>
                <form action="valores.php" method="get">
                    <label for="nome">Nome</label>
                        <input class="form-control"  type="text" name="nome" value=""><br>
                    <label for="nome">Usuário</label>
                        <input class="form-control" type="text" name="usuario" value=""><br>
                    <input type="submit" value="Cadastrar">

                </form>
            </div>
            <div>
                            <?php
                                    $cadastros= file("arquivo.txt")
                            ?>
                            <hr>
                        <H2>Cadastros já realizados</H2>
                        <hr>
                        <table class="table">
                            <thead>
                                <th>Nome</th>
                                <th>Usuário</th>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($cadastros as $indice) {
                                        #quebrar a string
                                        $dado = explode(" - ", $indice);
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

      
   


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>