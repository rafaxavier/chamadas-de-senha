
<?php 

	include("conexao.php"); 
//criando a query de consulta ao status de atendimento 
$status= mysqli_query($conn, "SELECT * FROM atende ") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);



?>

<!DOCTYPE html>
<html>
	<head>
	<title>Atendente</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="utf-8">	
	
	</head>
	<body>
		<div class="tabela" align='center'>
			<h1>Atendente</h1>
				<table >

					<tr>
						<th>AGUARDANDO</th>
						<th>EM ATENDIMENTO</th>
						<th>ATENDIDAS</th>
					</tr>
					    
					    <?php
					    //pecorrendo os registros da consulta.
					     $status= mysqli_query($conn, "SELECT * FROM atende ") or die( 
		  					mysqli_error($cx) );
							while ($aux = mysqli_fetch_assoc($status)){
								echo "<tr>";
								
									echo "<td>";
									if ($aux["statusAtende"]==1 )
										echo $aux["senhaAtende"];
									else echo "&nbsp﻿﻿";
									"</td>";
									echo "<td>";
									if ($aux["statusAtende"]==2 )
										echo $aux["statusAtende"].$aux["senhaAtende"];
									else echo "&nbsp﻿﻿";
									"</td>";
									echo "<td>";
									if ($aux["statusAtende"]==3 )
										echo $aux["statusAtende"].$aux["senhaAtende"];
									else echo "&nbsp﻿﻿";
									"</td>";

								echo "</tr>";
								
							}

						
						?>
				</table><br>	
		</div>
			
			<button class="botao" onclick="window.location.href='index.php'">Voltar</button>
			<button class="botao" onclick="window.location.href='chamar.php?retorno=atendente'">Chamar Próximo</button>
			<button class="botao" onclick="window.location.href='limpar.php'">limpar atendimentos</button>
			
	</body>
</html>
