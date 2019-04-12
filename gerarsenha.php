<?php 
include("conexao.php"); 
include('funcoes.php');

//criando a query que pega a data e hora atual no servidor
$data = mysqli_query($conn, "SELECT NOW() ") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
                   		$data = date('Y-m-d  H:i:s');
                   		$senha=generatePassword(4);//Senha com 4 caraceters
                   		$status =1 ; //1 aguardando a vez, 2 em atendimento ,3 finalizado 
					

	


$sql= "INSERT INTO `atende`(dataAtende,senhaAtende,statusAtende) VALUES ('$data','$senha','$status')"; 


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: exibesenhaatendimento.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>