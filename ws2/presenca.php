<?php
require "nusoap_config_client.php";
require "ws2db_config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PROJETO ENG SOFTWARE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<form action = "presenca.php" method="get">

	     Email: <input type="text" name="email" ><br/>
		 Token: <input type="text" name="token" ><br/>
		 
		 HORARIO:
			<select name='horario_id'>
			<?php
				$result = $client->call('Server2.listarHorario', array());
				 print_r($result);
			?>
		</select><br/>
		ALUNO:
			<select name='aluno_id'>
			<?php
				$result = $client->call('Server2.listarAluno', array());
				 print_r($result);
			?>
    </select><br/>
		presença (x):<input type="text" name="presenca" <?php echo "value='".$presenca."'";?>><br/>
	
	    <input type="submit">

</form>

<?php


 
if(isset($_GET["token"]) && isset($_GET["email"])){
	
 $email=$_GET["email"];	
 $token=$_GET["token"];
 $horario_id=$_GET["horario_id"];
 $aluno_id=$_GET["aluno_id"];
 $presenca=$_GET["presenca"];

// Call the SOAP method
//$result = $client->call('presenca', array('email' => $email, 'token'=>$token,'horario_id' => $horario_id, 'aluno_id' => $aluno_id, 'presenca' => $presenca));

$result = $client->call('Server2.listarPresencas', array('email' => $email, 'token'=>$token,'horario_id' => $horario_id, 'aluno_id' => $aluno_id, 'presenca' => $presenca));
echo "</br></br>";
print_r($result);

mysqli_close($conn);

 }
?>
</body>
</html>
