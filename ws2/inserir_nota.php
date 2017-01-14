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
<form action = "inserir_nota.php" method="GET">

	     Email: <input type="text" name="email" ><br/>
		 Token: <input type="text" name="token" ><br/>
		 
		 ALUNO_ID:
			<select name='aluno_id'>
			<?php
				 $result = $client->call('Server2.listarAluno', array());
				 print_r($result);
			?>
		</select><br/>
		Nota:<input type="text" name="nota" <?php echo "value='".$nota."'";?>><br/>
		Data:<input type="text" name="data" <?php echo "value='".$data."'";?>><br/>
		DISCIPLINA_ID:
			<select name='disciplina_id'>
			<?php
				$result = $client->call('Server2.listarDisciplina', array());
				 print_r($result);
			?>
    </select><br/>

	
	    <input type="submit">

</form>

<?php



 
if(isset($_GET["token"]) && isset($_GET["email"])){
	
 $token=$_GET["token"];
 $email=$_GET["email"];
 $aluno_id=$_GET["aluno_id"];
 $nota=$_GET["nota"];
 $data=$_GET["data"];
 $disciplina_id=$_GET["disciplina_id"];

// Call the SOAP method
//$result = $client->call('inserir_nota', array('email' => $email, 'token'=>$token,'aluno_id' => $aluno_id, 'nota' => $nota, 'data' => $data, 'disciplina_id' => $disciplina_id));

$result = $client->call('Server2.darNota', array('email' => $email, 'token'=>$token,'aluno_id' => $aluno_id, 'nota' => $nota, 'data' => $data, 'disciplina_id'=> $disciplina_id));
echo "</br></br>";
print_r($result);

mysqli_close($conn);

 }
?>
</body>
</html>