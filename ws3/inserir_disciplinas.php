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
<form action = "inserir_disciplinas.php" method="get">

     Email: <input type="text" name="email" ><br/>
     Token: <input type="text" name="token" ><br/>
	 
 
						Nome:        <input type="text" name="nome"         <?php echo "value='".$nome."'";?>><br/>
                        ects:      <input type="text" name="ects"       <?php echo "value='".$ects."'";?>><br/>
						Curso_id:
							<select name='curso_id'>
							<?php
							$result = $client->call('Server3.listarCurso', array());
							print_r($result);
							?>
						</select><br/>
						Ano:<input type="text" name="ano" <?php echo "value='".$ano."'";?>><br/>
						Semestre:      <input type="text" name="semestre"        <?php echo "value='".$semestre."'";?>><br/>

                      
					<input name="inserir_disciplinas" type="submit" value="INSERIR DISCIPLINA"/>
</form><br/>

<?php


 
if(isset($_GET["token"]) && isset($_GET["email"])){

	 $token=$_GET["token"];
	 $email=$_GET["email"];
	 $nome=$_GET["nome"];
	 $ects=$_GET["ects"];
	 $curso_id=$_GET["curso_id"];
	 $ano=$_GET["ano"];
	 $semestre=$_GET["semestre"];		

// Call the SOAP method
//$result = $client->call('inserir_disciplina', array('email' => $email, 'token'=>$token,'nome' => $nome, 'ects'=>$ects, 'curso_id'=>$curso_id, 'ano'=>$ano, 'semestre'=>$semestre));
$result = $client->call('Server3.inserirDisciplinas', array('email' => $email, 'token'=>$token,'nome' => $nome, 'ects'=>$ects, 'curso_id'=>$curso_id, 'ano'=>$ano, 'semestre'=>$semestre));
echo "</br></br>";
print_r($result);

mysqli_close($conn);


 }
?>
</body>
</html>