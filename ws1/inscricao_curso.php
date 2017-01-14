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

<form action="inscricao_curso.php" method="get">
     Email: <input type="text" name="email" ><br/>
     Token: <input type="text" name="token" ><br/>
	 
<h1>Inscrever a um curso:</h1>

    Curso_id:
	 <select name='curso_id'>
        <?php
        $result = $client->call('Server1.listarCurso', array());
		print_r($result);
        ?>
    </select><br/>

    <input type="submit">

</form>

<?php


 
 
if(isset($_GET["token"]) && isset($_GET["email"])){
	 
	$token=$_GET["token"];
	$email=$_GET["email"];
	$curso_id=$_GET["curso_id"];

// Call the SOAP method
$result = $client->call('Server1.inscreverCurso', array('email' => $email, 'token'=>$token,'curso_id' => $curso_id));
//$result = $client->call('inscricao_curso', array('email' => $email, 'token'=>$token,'curso_id' => $curso_id));
echo "</br></br>";


mysqli_close($conn);

 }
?>
</body>
</html>