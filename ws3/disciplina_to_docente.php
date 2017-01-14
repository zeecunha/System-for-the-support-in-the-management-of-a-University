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
<form action = "disciplina_to_docente.php" method="get">

	     Email: <input type="text" name="email" ><br/>
		 Token: <input type="text" name="token" ><br/>
		 
		 DOCENTE:
			<select name='docente_id'>
			<?php
				$result = $client->call('Server3.listarDocente', array());
							print_r($result);
			?>
		</select><br/>
		DISCIPLINA:
			<select name='disciplina_id'>
			<?php
				$result = $client->call('Server3.listarDisciplina', array());
							print_r($result);
			?>
    </select><br/>
	
	    <input type="submit">

</form>

<?php


 $token=$_GET["token"];
 $email=$_GET["email"];
 $docente_id=$_GET["docente_id"];
 $disciplina_id=$_GET["disciplina_id"];
 
if(isset($_GET["token"]) && isset($_GET["email"])){
	
	$token=$_GET["token"];
	$email=$_GET["email"];
	$docente_id=$_GET["docente_id"];
	$disciplina_id=$_GET["disciplina_id"];

// Call the SOAP method
//$result = $client->call('disciplina_to_docente', array('email' => $email, 'token'=>$token,'docente_id' => $docente_id,'disciplina_id' => $disciplina_id));
$result = $client->call('Server3.disciplinaToDocente', array('email' => $email, 'token'=>$token,'docente_id' => $docente_id,'disciplina_id' => $disciplina_id));
echo "</br></br>";
print_r($result);

mysqli_close($conn);

 }
?>
</body>
</html>
