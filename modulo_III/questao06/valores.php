<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação</title>
</head>
<body>

<?php
		$nome = $_GET['nome'];
        $usuario = $_GET['usuario'];
        echo "O nome da pessoa é ".$nome." e seu usuário é ".$usuario."<br>";

        $nome_arquivo = "arquivo.txt";
        $modo = "a+";
        $arquivo = fopen($nome_arquivo,$modo);
        if ($arquivo == false) {
            echo "Não foi possível criar o arquivo.";
            die("<br><br><a href='manipulacao.php'>Voltar</a>");
        }else {
            echo "Foi possível criar/abrir o arquivo.";
            fwrite($arquivo,$nome." - ".$usuario." \n");
            echo "<br><br><a href='manipulacao.php'>Voltar</a>";

            
            fclose($arquivo);
        }
?>




    
</body>
</html>