<?php


// Pull in the NuSOAP code
require_once "./nusoap-0.9.5/lib/nusoap.php";
require "WS3/class.Admin.php";
require "WS3/class.Aluno.php";
require "WS3/class.Aula.php";
require "WS3/class.Curso.php";
require "WS3/class.Disciplina.php";
require "WS3/class.Docente.php";
require "WS3/class.Ensina.php";
require "WS3/class.Horario.php";
require "WS3/class.Login.php";
require "WS3/class.Nota.php";
require "WS3/class.Sala.php";
require "WS3/class.Turma.php";



class Server3 {
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
		$s1=new WS3_Login();
		return $s1->validate($email, $token);
	}
	
	public static function inscrever_alunos($email, $token, $nome, $apelido, $idade, $morada, $contato, $email_aluno){
		$s1=new WS3_Admin();
		return $s1->inscrever_alunos($email, $token, $nome, $apelido, $idade, $morada, $contato, $email_aluno);
	}
	
	public static function inserirDisciplinas($email, $token, $nome, $ects, $curso_id, $ano, $semestre){
		$s1=new WS3_Admin();
		return $s1->inserirDisciplinas($email, $token, $nome, $ects, $curso_id, $ano, $semestre);
	}
	
	public static function disciplinaToDocente($email, $token, $docente_id, $disciplina_id){
		$s1=new WS3_Admin();
		return $s1->disciplinaToDocente($email, $token, $docente_id, $disciplina_id);
	}
	
	public static function criarAula($email, $token, $disciplina_id, $turma_id, $sala_id, $docente_id, $duracao){
		$s1=new WS3_Admin();
		return $s1->criarAula($email, $token, $disciplina_id, $turma_id, $sala_id, $docente_id, $duracao);
	}
	
	public static function aulaToHorario($email, $token, $aula_id, $inicio, $fim){
		$s1=new WS3_Admin();
		return $s1->aulaToHorario($email, $token, $aula_id, $inicio, $fim);
	}
	
	public static function listar_notas($email, $token){
		$s1=new WS3_Admin();
		return $s1->listar_notas($email, $token);
	}
	
	public static function listarSalas($email, $token){
		$s1=new WS3_Admin();
		return $s1->listarSalas($email, $token);
	}
	
	public static function listar_alunos($email, $token){
		$s1=new WS3_Admin();
		return $s1->listar_alunos($email, $token);
	}
	
	public static function listarAula(){
		$s1=new WS3_Aula();
		return $s1->listarAula();
	}
	
	public static function listarDisciplina(){
		$s1=new WS3_Disciplina();
		return $s1->listarDisciplina();
	}
	
	public static function listarTurma(){
		$s1=new WS3_Turma();
		return $s1->listarTurma();
	}
	
	public static function listarSala1(){
		$s1=new WS3_Sala();
		return $s1->listarSala1();
	}
	
	public static function listarDocente(){
		$s1=new WS3_Docente();
		return $s1->listarDocente();
	}
	
	public static function listarCurso(){
		$s1=new WS3_Curso();
		return $s1->listarCurso();
	}
	
	
	
	


	
}

$ws = new Server3();

$ws->registerMethod('Server3.validate');
$ws->registerMethod('Server3.inscrever_alunos');
$ws->registerMethod('Server3.inserirDisciplinas');
$ws->registerMethod('Server3.disciplinaToDocente');
$ws->registerMethod('Server3.criarAula');
$ws->registerMethod('Server3.aulaToHorario');
$ws->registerMethod('Server3.listar_notas');
$ws->registerMethod('Server3.listarSalas');
$ws->registerMethod('Server3.listar_alunos');
$ws->registerMethod('Server3.listarAula');
$ws->registerMethod('Server3.listarDisciplina');
$ws->registerMethod('Server3.listarTurma');
$ws->registerMethod('Server3.listarSala1');
$ws->registerMethod('Server3.listarDocente');
$ws->registerMethod('Server3.listarCurso');



$ws->processRequest();