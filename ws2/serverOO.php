<?php


// Pull in the NuSOAP code
require_once "./nusoap-0.9.5/lib/nusoap.php";
require "WS2/class.Aluno.php";
require "WS2/class.Aula.php";
require "WS2/class.Disciplina.php";
require "WS2/class.Docente.php";
require "WS2/class.Horario.php";
require "WS2/class.Login.php";
require "WS2/class.Nota.php";
require "WS2/class.Sala.php";
require "WS2/class.Turma.php";
require "WS2/class.Ensina.php";
require "WS2/class.Presenca.php";

class Server2 {
	public $server = NULL;
	
	public function __construct(){
		// Create the server instance
		$this->server = new nusoap_server();
		// Define the method as a PHP function
	}
	
	// Register the method to expose
	public function registerMethod($nameMethod){
		//echo $nameMethod."()";
		$this->server->register($nameMethod);
	}

	
	// Use the request to (try to) invoke the service
	public function processRequest(){
		$this->server->service($GLOBALS['HTTP_RAW_POST_DATA'] );
	}

	public static function validate($email, $token){
		$s1=new WS2_Login();
		return $s1->validate($email, $token);
	}
	
	public static function verHorario($email, $token){
		$s1=new WS2_Docente();
		return $s1->verHorario($email, $token);
	}
	
	public static function listarPresencas($email, $token, $horario_id, $aluno_id, $presenca){
		$s1=new WS2_Docente();
		return $s1->listarPresencas($email, $token, $horario_id, $aluno_id, $presenca);
	}
	
	public static function darNota($email, $token, $aluno_id, $nota, $data, $disciplina_id){
		$s1=new WS2_Docente();
		return $s1->darNota($email, $token, $aluno_id, $nota, $data, $disciplina_id);
	}
	
	public static function preencherSumario($email, $token, $aula_id, $sumario){
		$s1=new WS2_Docente();
		return $s1->preencherSumario($email, $token, $aula_id, $sumario);
	}
	
	public static function atualizarDados($email,$nome,$apelido,$idade,$morada){
		$s1=new WS2_Docente();
		return $s1->atualizarDados($email,$nome,$apelido,$idade,$morada);
	}
	
	public static function listarAluno(){
		$s1=new WS2_Aluno();
		return $s1->listarAluno();
	}
	
	public static function listarDisciplina(){
		$s1=new WS2_Disciplina();
		return $s1->listarDisciplina();
	}
	
	public static function listarHorario(){
		$s1=new WS2_Horario();
		return $s1->listarHorario();
	}
	
	public static function listarAula(){
		$s1=new WS2_Aula();
		return $s1->listarAula();
	}
	
	


	
}

$ws = new Server2();

$ws->registerMethod('Server2.validate');
$ws->registerMethod('Server2.verHorario');
$ws->registerMethod('Server2.listarPresencas');
$ws->registerMethod('Server2.darNota');
$ws->registerMethod('Server2.preencherSumario');
$ws->registerMethod('Server2.atualizarDados');
$ws->registerMethod('Server2.listarAluno');
$ws->registerMethod('Server2.listarDisciplina');
$ws->registerMethod('Server2.listarHorario');
$ws->registerMethod('Server2.listarAula');



$ws->processRequest();