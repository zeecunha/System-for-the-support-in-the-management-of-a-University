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
<form action = "sumario.php" method="GET">

	     Email: <input type="text" name="email" ><br/>
		 Token: <input type="text" name="token" ><br/>
		 
		 Aula_ID:
			<select name='aula_id'>
			<?php
				$result = $client->call('Server2.listarAula', array());
				 print_r($result);
			?>
		</select><br/>
		sumario:<input type="text" name="sumario" <?php echo "value='".$sumario."'";?>><br/>
	
	    <input type="submit">

</form>

<?php


 
 
if(isset($_GET["token"]) && isset($_GET["email"])){
	
 $token=$_GET["token"];
 $email=$_GET["email"];
 $aula_id=$_GET["aula_id"];
 $sumario=$_GET["sumario"];

// Call the SOAP method
//$result = $client->call('sumario', array('email' => $email, 'token'=>$token,'aula_id' => $aula_id, 'sumario' => $sumario));

$result = $client->call('Server2.preencherSumario', array('email' => $email, 'token'=>$token,'aula_id' => $aula_id, 'sumario' => $sumario));

echo "</br></br>";
print_r($result);

mysqli_close($conn);

 }
?>
</body>
</html>