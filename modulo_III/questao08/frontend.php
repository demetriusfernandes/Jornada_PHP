<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação - Frontend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md offset-md-2">
            <H2>Cadastro de produtos</H2>
            <form action="backend.php" method="POST">
                <label for="nome">Nome do produto</label>
                    <input placeholder="Nome" class="my-1 form-control" type="text" name="n_produto" value=""><br>
                <label for="nome">Quantidade</label>
                    <input placeholder="Quantidade" class="my-1 form-control" type="text" name="qnt" value=""><br>
                <label for="nome">Preço R$</label>
                    <input placeholder="Preço" class="my-1 form-control" type="text" name="preco" value=""><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar"> <a href="listaProdutos.php" class="btn btn-warning">Listar produtos</a>
            <a href="listaProdutosCsv.php" class="btn btn-danger">Lista de produtos CSV</a>
        
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>