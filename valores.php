<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

function verificar_maioridade($i){
    if($i >= 18){
        echo "É maior de idade.<br>";
    }else{
        echo "É menor de idade.<br>";
    }
}


echo "O nome dele é: $nome <br>
        <img width=100 height=100 src='https://w7.pngwing.com/pngs/931/209/png-transparent-computer-icons-symbol-avatar-logo-person-with-helmut-miscellaneous-black-silhouette.png'><br> 
      E sua idade é $idade <br><br>"; verificar_maioridade($idade);
?>