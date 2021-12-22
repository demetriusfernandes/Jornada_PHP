<?php
    #recupera o arquivo para um array
    $arquivoTXT = file("arquivo.txt");

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
<div class="container justify-content-center">

            <?php
                #Conversão do TXT para CSV
                $arquivoCSV = fopen("arquivo.csv","a+");
                
                foreach ($arquivoTXT as $indice) {
                    $aux = str_replace(" - ",",",$indice);
                    fwrite($arquivoCSV,$aux);
                }
                fclose($arquivoCSV);
                echo "<br>Dados do arquivo.txt convertidos e inseridos no arquivo.csv <br><br>";   
            ?>
            <a href="frontend.php" class="btn btn-primary">Cadastrar Produto no arquivo .TXT</a>
            <a href="listaProdutos.php" class="btn btn-warning">Listar produtos</a>
            <a href="listaProdutosCsv.php" class="btn btn-danger">Lista de produtos CSV</a>
</div>
</body>
</html>

