<?php
    #recupera o arquivo para um array
    $produtos = file("arquivo.txt");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md offset-md-2">
            <hr>
            <H2>Listagem de produtos do "Arquivo .TXT"</H2>
            <hr>
            <table class="table">
                <thead>
                    <th>Nome do produto</th>
                    <th>Quantidade</th>
                    <th>Preço R$</th>
                </thead>
                <tbody>
                    <?php 
                        foreach ($produtos as $produto) {
                            #quebrar a string
                            $dado = explode(" - ", $produto);
                    ?>
                        <tr>
                            <td><?=$dado[0];?></td>
                            <td><?=$dado[1];?></td>
                            <td><?=$dado[2];?></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>

            <a href="frontend.php" class="btn btn-primary">Cadastrar Produto no arquivo .TXT</a>
            <a href="listaProdutosCsv.php" class="btn btn-danger">Lista de produtos CSV</a>
            <a href="conversorTxtCsv.php" class="btn btn-dark">Converter e incluir dados no arquivo .CSV</a>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
