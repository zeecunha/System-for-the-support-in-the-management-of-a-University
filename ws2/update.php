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

<form action="update.php" method="get">
     Email: <input type="text" name="email" ><br/>
     Token: <input type="text" name="token" ><br/>

	 <input type="submit" value="UPDATE"/>
</form><br/>


<?php 

if(isset($_GET["token"]) && isset($_GET["email"])){
	
	 $token=$_GET["token"];
	 $email=$_GET["email"];
// Call the SOAP method
//$result = $client->call('validate', array('email' => $email, 'token'=>$token));

$result = $client->call('Server2.validate', array('email' => $email, 'token'=>$token));
echo "</br></br>";
print_r($result);
	
}
?>


<form action="update.php" method="get">

	<?php 
//Ir buscar os dados do cliente
        $query = "select nome, apelido, idade, morada, email from docente where email='".$_GET["email"]."';";
		
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
		$email = $row["email"];
        $nome = $row["nome"];
        $apelido = $row["apelido"];
		$idade = $row["idade"];
		$morada = $row["morada"];
	 ?>
						Email:        <input type="text" name="email"         <?php echo "value='".$email."'";?> readonly><br/>
						Nome:        <input type="text" name="nome"         <?php echo "value='".$nome."'";?>><br/>
                        Apelido:      <input type="text" name="apelido"       <?php echo "value='".$apelido."'";?>><br/>
						Idade:      <input type="text" name="idade"        <?php echo "value='".$idade."'";?>><br/>
						Morada:		<input type="text" name="morada"      <?php echo "value='".$morada."'";?>><br/>
  
					<input type="submit" value="UPDATE"/>
</form><br/>

<?php 

if(isset($_GET["email"]) && isset($_GET["nome"]) && isset($_GET["apelido"]) && isset($_GET["idade"]) && isset($_GET["morada"])){

/*

		$aeiou = ($_POST['nome']!='' && isset($_POST['nome']) && $_POST['apelido']!='' && isset($_POST['apelido']) && $_POST['idade']!='' && isset($_POST['idade']) && $_POST['morada']!='' && isset($_POST['morada']) );
		
		echo $aeiou;
		
        if ( $aeiou){
		$email=$_GET["email"]; 
		
		//Verificar os campos
        $nome = $_POST["nome"];
		//echo $nome;
        $apelido = $_POST["apelido"];
		//echo $apelido;
        $idade = $_POST["idade"];
		//echo $email;
        $morada = $_POST["morada"];
	*/
	
		$email=$_GET["email"];
		$nome=$_GET["nome"];
		$apelido=$_GET["apelido"];
        $idade=$_GET["idade"];
        $morada=$_GET["morada"];

		
		
		
		//$result = $client->call('update', array('email'=>$email,'nome'=>$nome,'apelido' => $apelido, 'idade'=>$idade, 'morada'=>$morada));
		$result = $client->call('Server2.atualizarDados', array('email'=>$email,'nome'=>$nome,'apelido' => $apelido, 'idade'=>$idade, 'morada'=>$morada));
		echo "</br></br>";
		print_r($result);

		mysqli_close($conn);
		
		}
		
		
?>

</body>
</html>