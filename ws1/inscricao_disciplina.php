<?php
require "nusoap_config_client.php";
require "ws1db_config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PROJETO ENG SOFTWARE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<form action = "inscricao_disciplina.php" method="GET">

     Email: <input type="text" name="email" ><br/>
     Token: <input type="text" name="token" ><br/>
	 
<h1>Inscrever a uma disciplina:</h1>

    Disciplina_id:
	 <select name='disciplina_id'>
        <?php
         $result = $client->call('Server1.listarDisciplina', array());
		print_r($result);
        ?>
    </select><br/>

    <input type="submit">

</form>

<?php



 
if(isset($_GET["token"]) && isset($_GET["email"])){
	
	 $token=$_GET["token"];
	 $email=$_GET["email"];
	 $disciplina_id=$_GET["disciplina_id"]; 	 

	// Call the SOAP method
	
	//$result = $client->call('inscricao_disciplina', array('email' => $email, 'token'=>$token,'disciplina_id' => $disciplina_id));
	$result = $client->call('Server1.inscreverDisciplina', array('email' => $email, 'token'=>$token,'disciplina_id' => $disciplina_id));
	echo "</br></br>";
	print_r($result);

	mysqli_close($conn);

 }
?>

</body>
</html>