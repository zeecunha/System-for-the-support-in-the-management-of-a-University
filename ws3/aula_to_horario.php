<?php
require "nusoap_config_client.php";
require "ws3db_config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PROJETO ENG SOFTWARE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<form action = "aula_to_horario.php" method="GET">

	     Email: <input type="text" name="email" ><br/>
		 Token: <input type="text" name="token" ><br/>
		 
		 AULA:
			<select name='aula_id'>
			<?php
				$result = $client->call('Server3.listarAula', array());
				 print_r($result);
			?>
		</select><br/>
		HORA DE INICIO:      <input type="text" name="inicio"        <?php echo "value='".$inicio."'";?>><br/>
		HORA DE FIM:      <input type="text" name="fim"        <?php echo "value='".$fim."'";?>><br/>
	
	    <input type="submit">

</form>

<?php


 
if(isset($_GET["token"]) && isset($_GET["email"])){

	
 $token=$_GET["token"];
 $email=$_GET["email"];
 $aula_id=$_GET["aula_id"];
 $inicio=$_GET["inicio"];
 $fim=$_GET["fim"];
 
// Call the SOAP method
//$result = $client->call('aula_to_horario', array('email' => $email, 'token'=>$token,'aula_id' => $aula_id ,'inicio' => $inicio, 'fim'=> $fim));
$result = $client->call('Server3.aulaToHorario', array('email' => $email, 'token'=>$token,'aula_id' => $aula_id ,'inicio' => $inicio, 'fim'=> $fim));
echo "</br></br>";
print_r($result);

mysqli_close($conn);

 }
?>
</body>
</html>