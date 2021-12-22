<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação - Backend</title>
</head>
<body>

<?php
	#receber dados do formulário
    $dados = $_POST;

    #transformar o array em string
    $dados = implode(" - ", $dados);

    #criar um arquivo .txt #a+ coloca ponteiro no inicio do arquivo
    $arquivo = fopen("arquivo.txt","a+"); 

    #escrevendo os dados do produto no arquivo
    fwrite($arquivo, $dados."\n");
    fclose($arquivo);


    #redirecionar para tabela com a listagem
    header("location: listaProdutos.php");
?>




    
</body>
</html>