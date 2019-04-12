<!-- Módulo no qual o atendente chama a próxima senha para atendimento;
Essa tela conterá um botão no qual o atendente chamará a nova senha para atendimento;
Essa tela conterá um botão no qual o atendente chamará a nova senha para atendimento;
a. Quando o atendente chama outra senha para atendimento, o botão Chamar deverá estar
contido em um formulário, no qual este formulário chamará via método post a página
ChamaAtendimentoOK.php. O código ChamaAtendimentoOK.php deverá:
i. Apaga registro atual, onde o status está em: EM ATENDIMENTO. Aqui você terá um
problema a resolver: Como fará quando for o primeiro atendimento?
ii. Pegar o próximo registro da base de dados e alterar o valor do campo StatusAtende
para: Em Atendimento
Apagar o registro da senha do atendimento atual;
iv. Chamar a página ChamaAtendimentoOK.php, com as informações descritas na figura
desta página.
v. A págnina ChamaAtendimentoOK.php conterá um botão Voltar que chamará a página
ChamaAtendimemntoOK.php -->
<?php //include("funcoes.php");
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
<!-- exibe qual a próxima senha a ser chamada, além de exibir a senha do
atendimento atual e a senha do atendimento anterior;
Essa página deverá ser atualizada a cada 3 segundos.
 -->
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
			<button class="botao" onclick="window.location.href='chamar.php'">Chamar Próximo</button>
	</body>
</html>
