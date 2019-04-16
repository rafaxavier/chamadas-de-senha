<?php 
	include("conexao.php");  
		
	//criando a query de consulta ao status em atendimento que é igual a 2
	$teste1= mysqli_query($conn, "UPDATE atende  SET statusAtende=3 WHERE statusAtende=2 ORDER BY codAtende ASC LIMIT 1" );
	$teste2= mysqli_query($conn, "UPDATE atende  SET statusAtende=2 WHERE statusAtende=1  LIMIT 1 ");


	if (mysqli_query($conn, $sql)) {
    	header("Location: chamaatendimento.php");
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>
