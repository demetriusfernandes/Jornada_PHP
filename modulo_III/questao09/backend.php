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
		#recuperando dados de usuários
        $dados = file("dados.txt");

        #recebendo dados do formulário de login
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        foreach ($dados as $login) {
            #quebrar a string
            $dado = explode(" - ", $login);
            if (trim($dado[0]) == trim($nome) && trim($dado[1]) == trim($senha) ) {
                #redirecionar para tela de login com sucesso
                #echo "<span class='text-success'>deu bom</span> <br>$dado[0]<br>$dado[1]<br><br>";
                header("location: login_com_sucesso.php?s=$nome");
                         
             }
        }
        
    ?>
    <div class="container justify-content-center w-50 mt-5">
    
    <div class="card" style="width: 18rem;">
    <img src="http://4.bp.blogspot.com/-URYwtjqO4LA/VJYKyoupEKI/AAAAAAAABKY/RWlPTTcJ44Y/s1600/10866745_746893525379293_1391136459_n.png">
    <div class="card-body">
        <h5 class="card-title text-danger fw-bold">Login sem sucesso!! :(</h5>
        <p class="card-text">Os dados inseridos infelizmente não se encontram em nossa base de dados</p>
        <a href="frontend.php" class="btn btn-primary">Voltar</a>
    </div>
    </div>
    
</div>
</div>
</body>
</html>