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

<form action="horario.php" method="get">
     Email: <input type="text" name="email" ><br/>
     Token: <input type="text" name="token" ><br/>
	 
<h1>Listar horario:</h1>

    <input type="submit">

</form>

<?php



 
if(isset($_GET["token"]) && isset($_GET["email"])){
	 
 $token=$_GET["token"];
 $email=$_GET["email"];
// Call the SOAP method
$result = $client->call('Server1.verHorario', array('email' => $email, 'token'=>$token));
//$result = $client->call('horario', array('email' => $email, 'token'=>$token));
echo "</br></br>";
print_r($result);

mysqli_close($conn);

 }
?>
</body>
</html>