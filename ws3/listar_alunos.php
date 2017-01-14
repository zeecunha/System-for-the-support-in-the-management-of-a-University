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

<form action="listar_alunos.php" method="get">
     Email: <input type="text" name="email" ><br/>
     Token: <input type="text" name="token" ><br/>
	 
<h1>Listar alunos:</h1>

    <input type="submit">

</form>

<?php



 
 
if(isset($_GET["token"]) && isset($_GET["email"])){
	 
	 $token=$_GET["token"];
	 $email=$_GET["email"];
	 
// Call the SOAP method
//$result = $client->call('listar_alunos', array('email' => $email, 'token'=>$token));
$result = $client->call('Server3.listar_alunos', array('email' => $email, 'token'=>$token));
echo "</br></br>";
print_r($result);

mysqli_close($conn);

 }
?>
</body>
</html>