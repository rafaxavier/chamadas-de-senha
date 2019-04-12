
<?php //include("funcoes.php");
	include("conexao.php"); 

//criando a query de consulta à tabela criada 
$sql = mysqli_query($conn, "SELECT * FROM atende order by codAtende desc limit 1") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);

?>

<!DOCTYPE html>
<html>
	<head>
	<title>Sistema de Atendimento</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="utf-8">	

	</head>
''
	<body>
		<div  align='center'> 
			<div class="ticket" >
				 
					    <?php
					    //pecorrendo os registros da consulta.
					     
							while ($aux = mysqli_fetch_assoc($sql)){
								echo "<h1>SENHA </h1>";
								echo "<h1>".$aux["senhaAtende"]."</h1><br><br><br>";
								echo "<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" .$aux["codAtende"]."</p>";
								echo date('d/m/Y' ,  strtotime($aux["dataAtende"]))."<br>"; 
								echo date('H:i:s' ,  strtotime($aux["dataAtende"]))."<br><br>";
								  if ($aux["statusAtende"]== 1) {
								  	echo "Aguarde o atendimento!"; 
							  		}
							} 
													
							mysqli_close($conn);	
		   				?>
		   		
		 	</div>
		 	<button onclick="myFunction()">imprimir</button>
		   	<button onclick="window.location.href='gerarsenha.php'">Nova senha</button>
			<button onclick="window.location.href='index.php'">Voltar</button>
			<script>
				function myFunction() {
				  window.print();
				}
			</script>

		</div>
		<br><br><br>


	</body>
</html>



