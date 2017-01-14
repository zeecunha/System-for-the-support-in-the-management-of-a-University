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
<form action = "inscrever_alunos.php" method="GET">

     Email: <input type="text" name="email" ><br/>
     Token: <input type="text" name="token" ><br/>
	 
	 
						Nome:        <input type="text" name="nome"         <?php echo "value='".$nome."'";?>><br/>
                        Apelido:      <input type="text" name="apelido"       <?php echo "value='".$apelido."'";?>><br/>
						Idade:      <input type="text" name="idade"        <?php echo "value='".$idade."'";?>><br/>
						Morada:<input type="text" name="morada" <?php echo "value='".$morada."'";?>><br/>
						Contato:      <input type="text" name="contato"        <?php echo "value='".$contato."'";?>><br/>
                        Email:        <input type="text" name="email_aluno"         <?php echo "value='".$email_aluno."'";?>><br/>
                        
                      
					<input name="inserir_aluno" type="submit" value="INSERIR ALUNO"/>
</form><br/>

<?php


 
if(isset($_GET["token"]) && isset($_GET["email"])){

	 $token=$_GET["token"];
	 $email=$_GET["email"];
	 $nome=$_GET["nome"];
	 $apelido=$_GET["apelido"];
	 $idade=$_GET["idade"];
	 $morada=$_GET["morada"];
	 $contato=$_GET["contato"];
	 $email_aluno=$_GET["email_aluno"];	

// Call the SOAP method
//$result = $client->call('inscrever_alunos', array('email' => $email, 'token'=>$token,'nome' => $nome, 'apelido'=>$apelido, 'idade'=>$idade, 'morada'=>$morada, 'contato'=>$contato, 'email_aluno'=>$email_aluno));
$result = $client->call('Server3.inscrever_alunos', array('email' => $email, 'token'=>$token,'nome' => $nome, 'apelido'=>$apelido, 'idade'=>$idade, 'morada'=>$morada, 'contato'=>$contato, 'email_aluno'=>$email_aluno));
echo "</br></br>";
echo "TOKEN:";
print_r($result);

mysqli_close($conn);


 }
?>
</body>
</html>