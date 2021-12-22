<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Manipulação</title>
</head>
<body>
<div class="container justify-content-center w-50 mt-5">
<?php
		$nome = $_GET['nome'];
        $usuario = $_GET['usuario'];
        echo "O nome da pessoa é <span class='text-danger fw-bold'>$nome</span> e seu usuário é <span class='text-primary fw-bold'>$usuario</span> <br>";

        $nome_arquivo = "arquivo.txt";
        $modo = "a+";
        $arquivo = fopen($nome_arquivo,$modo);
        if ($arquivo == false) {
            echo "Não foi possível criar o arquivo.";
            die("<br><br><a href='manipulacao.php' class='text-decoration-none'>Voltar</a>");
        }else {
            echo "Foi possível criar/abrir o arquivo.";
            fwrite($arquivo,$nome." - ".$usuario." \n");
            echo "<br><br><a href='manipulacao.php' class='text-decoration-none'>Voltar</a>";

            
            fclose($arquivo);
        }
?>


</div>

    
</body>
</html>