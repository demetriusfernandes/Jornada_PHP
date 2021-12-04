<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
	<title>Curso UTD - PHP</title>
</head>
<body>

<div class="container"> <!-- Inicio container-->
	<div> <!-- Inicio Questão 06-->
		<h1 class="text-primary">Questão 06</h1>
		<h6 class="text-danger">Calcule a média de 10 números digitados ou criados</h3>
				<?php
						$num = array(2,3,4,1,5,6,7,3,6,7);
						$media = 0;
						$soma = 0;
						echo "<strong>Números do array são</strong>:<br>";
						for($a = 0 ; $a<count($num); $a++){
							$soma = $soma + $num[$a];
							echo "$num[$a] ";
						}
					$media = $soma/count($num);
					echo "<br><strong>Média:</strong> $media";
				?>
	</div><!-- Fim Quenstão 06-->
<hr>
	<div> <!-- Inicio Questão 07-->
		<h1 class="text-primary">Questão 07</h1>
		<h6 class="text-danger">Digite 5 números e verifique qual é o maior</h3>
				<?php
						$array = array(-40, 6, 8, 32, 3);
						$aux = $array[0];  //recebe o primeiro valor do array
						echo "<strong>Números do array são</strong>:<br>";
						for($a = 0; $a < count($array) ; $a++){   //varre até o último valor
							echo "$array[$a] ";
							if( $aux < $array[$a] ){   //Verifica se é maior, se for atribui o valor a variável $aux
								$aux = $array[$a]; 
							}
						}
					
						echo "<br><strong>O maior número é</strong>: $aux";
				?>
	</div><!-- Fim Quenstão 07-->

	<hr>
	<div> <!-- Inicio Questão 08-->
		<h1 class="text-primary">Questão 08</h1>
		<h6 class="text-danger">Digite várias idades. Exiba quantas pessoas são  maior  de  idade  (18  anos)  e  quantas  são menores</h3>
				<?php
						$idades = array(50,15,2,16,19,23,40,12,9,25,60,32);
						$maiores18 = 0;
						$menores18 = 0;
						echo "<strong>Números do array são</strong>:<br>";
						for($a = 0 ; $a<count($idades); $a++){
							if($idades[$a]>18){
								$maiores18++;
							}else{
								$menores18++;
							}
							echo "$idades[$a] ";
						}
						echo "<br>Quantidade de pessoas maiores de 18 anos: $maiores18<br>
						Quantidade de pessoas menores de 18 anos: $menores18<br>"
						
				?>
	</div><!-- Fim Quenstão 08-->


</div><!-- //FIM container-->
				



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>