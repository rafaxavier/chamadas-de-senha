<?php //include("funcoes.php");
	include("conexao.php"); 

?>
<!DOCTYPE html>
<html>
	<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="utf-8">	

	</head>

	<body>
		<div align='center'>
			<h1>SISTEMA DE ATENDIMENTO</h1>

			<div align="center" class="conteiner">
				<button  onclick="window.location.href='adquireatendimento.php'">MODO USUÁRIO</button><br><br>
				<button  onclick="window.location.href='statusatendimento.php'">MODO TELÃO</button><br><br>
				<button  onclick="window.location.href='chamaatendimento.php'">MODO ATENDENTE</button><br>
			</div>
		</div>
		<br><br><br>
			
	</body>
</html>
