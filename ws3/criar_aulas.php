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
<form action = "criar_aulas.php" method="GET">

     Email: <input type="text" name="email" ><br/>
     Token: <input type="text" name="token" ><br/>
	 
 

						Disciplina_id:
							<select name='curso_id'>
							<?php
							$result = $client->call('Server3.listarDisciplina', array());
							print_r($result);
							?>
						</select><br/>
						
						Turma_id:
							<select name='turma_id'>
							<?php
							$result = $client->call('Server3.listarTurma', array());
							print_r($result);
							?>
						</select><br/>
						
						Sala_id:
							<select name='sala_id'>
							<?php
							$result = $client->call('Server3.listarSala1', array());
							print_r($result);
							?>
						</select><br/>
						
						Docente_id:
							<select name='docente_id'>
							<?php
							$result = $client->call('Server3.listarDocente', array());
							print_r($result);
							?>
						</select><br/>
						
						Duracao:      <input type="text" name="duracao" <?php echo "value='".$duracao."'";?>><br/>

                      
					<input name="criar_aulas" type="submit" value="CRIAR AULA"/>
</form><br/>

<?php


 
if(isset($_GET["token"]) && isset($_GET["email"])){

	 $token=$_GET["token"];
	 $email=$_GET["email"];
	 $Disciplina_id=$_GET["Disciplina_id"];
	 $turma_id=$_GET["turma_id"];
	 $sala_id=$_GET["sala_id"];
	 $docente_id=$_GET["docente_id"];
	 $duracao=$_GET["duracao"];	

// Call the SOAP method
//$result = $client->call('criar_aula', array('email' => $email, 'token'=>$token,'disciplina_id' => $disciplina_id, 'turma_id'=>$turma_id, 'sala_id'=>$sala_id, 'docente_id'=>$docente_id, 'duracao'=>$duracao));
$result = $client->call('Server3.criarAula', array('email' => $email, 'token'=>$token,'disciplina_id' => $disciplina_id, 'turma_id'=>$turma_id, 'sala_id'=>$sala_id, 'docente_id'=>$docente_id, 'duracao'=>$duracao));
echo "</br></br>";
print_r($result);

mysqli_close($conn);


 }
?>
</body>
</html>