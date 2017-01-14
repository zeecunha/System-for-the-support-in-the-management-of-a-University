<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Admin.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 28.12.2016, 21:24:17 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include WS3_Aluno
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Aluno.php');

/**
 * include WS3_Docente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Docente.php');

/**
 * include WS3_Login
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Login.php');

/**
 * include WS3_Matricula
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Matricula.php');

/**
 * include WS3_Nota
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Nota.php');

/* user defined includes */
// section -64--88-56-1-5a24ee5d:158bc93f8b0:-8000:0000000000000867-includes begin
// section -64--88-56-1-5a24ee5d:158bc93f8b0:-8000:0000000000000867-includes end

/* user defined constants */
// section -64--88-56-1-5a24ee5d:158bc93f8b0:-8000:0000000000000867-constants begin
// section -64--88-56-1-5a24ee5d:158bc93f8b0:-8000:0000000000000867-constants end

/**
 * Short description of class WS3_Admin
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Admin
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute admin_id
     *
     * @access public
     * @var Integer
     */
    public $admin_id = null;

    /**
     * Short description of attribute nome
     *
     * @access public
     * @var String
     */
    public $nome = null;

    /**
     * Short description of attribute apelido
     *
     * @access public
     * @var String
     */
    public $apelido = null;

    /**
     * Short description of attribute email
     *
     * @access public
     * @var String
     */
    public $email = null;

    /**
     * Short description of attribute token
     *
     * @access public
     * @var String
     */
    public $token = null;

    // --- OPERATIONS ---

    /**
     * Short description of method inscrever_alunos
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function inscrever_alunos($email, $token, $nome, $apelido, $idade, $morada, $contato, $email_aluno)
    {
        require "ws3db_config.php";
	$login = new WS3_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
		
		$token_aluno = sha1($email);
					
        $query = "insert into aluno (nome, apelido, idade, morada, contato, email, token) values ('" . $nome . "','" . $apelido . "','" . $idade . "','" . $morada . "','" . $contato . "','" . $email_aluno . "','" . $token_aluno . "')";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        if ($result) {
            return $token_aluno;
        } else {
            return "não pode registar";
        }
    }
    else{
        return "Um valor em falta";
    }
    }

    /**
     * Short description of method inserirDisciplinas
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function inserirDisciplinas($email, $token, $nome, $ects, $curso_id, $ano, $semestre)
    {
        require "ws3db_config.php";
	$login = new WS3_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
					
        $query = "insert into disciplina (nome, ects, curso_id, ano, semestre) values ('" . $nome . "','" . $ects . "','" . $curso_id . "','" . $ano . "','" . $semestre . "')";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        if ($result) {
            return "inserido com sucesso!";
        } else {
            return "não pode inserir";
        }
    }
    else{
        return "Um valor em falta";
    }
    }

    /**
     * Short description of method disciplinaToDocente
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function disciplinaToDocente($email, $token, $docente_id, $disciplina_id)
    {
        require "ws3db_config.php";
	$login = new WS3_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
					
        $query = "insert into ensina (docente_id, disciplina_id) values ('" . $docente_id . "','" . $disciplina_id . "')";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        if ($result) {
            return "associado com sucesso!";
        } else {
            return "não pode associar";
        }
    }
    else{
        return "Um valor em falta";
    }
    }

    /**
     * Short description of method criarAula
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function criarAula($email, $token, $disciplina_id, $turma_id, $sala_id, $docente_id, $duracao)
    {
        require "ws3db_config.php";
	$login = new WS3_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
					
        $query = "insert into aula (disciplina_id, turma_id, sala_id, docente_id, duracao) values ('" . $disciplina_id . "','" . $turma_id . "','" . $sala_id . "','" . $docente_id . "','" . $duracao . "')";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        if ($result) {
            return "inserido com sucesso!";
        } else {
            return "não pode inserir";
        }
    }
    else{
        return "Um valor em falta";
    }
    }

    /**
     * Short description of method aulaToHorario
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function aulaToHorario($email, $token, $aula_id, $inicio, $fim)
 {
	require "ws3db_config.php";
	$login = new WS3_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
					
        $query = "insert into horario (aula_id, hora_inicio, hora_fim) values ('" . $aula_id . "','" . $inicio . "','" . $fim . "')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            return "associado com sucesso!";
        } else {
            return "nao pode associar!";
        }
    }
    else{
        return "um valor em falta!";
    }
}

    /**
     * Short description of method listar_notas
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listar_notas($email, $token)
{
	require "ws3db_config.php";
	$login = new WS3_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
		
		 $query = "select * from notas";
        $result = mysqli_query($conn, $query);
        $notas = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $notas[] = "nota_id - ".$row['nota_id'].", aluno_id - ".$row['aluno_id'].", nota - ".$row['nota'].", data - ".$row['data'].", disciplina_id - ".$row['disciplina_id'];
        }

        mysqli_close($conn);
        return implode (",",$notas); 
    }
    else{
        return "Um valor em falta";
    }
}

    /**
     * Short description of method listarSalas
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listarSalas($email, $token)
{
	require "ws3db_config.php";
	$login = new WS3_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
		
		 $query = "select * from sala";
        $result = mysqli_query($conn, $query);
        $sala = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $sala[] = "sala_id - ".$row['sala_id'].", numero -". $row['numero'].", capacidade - ".$row['capacidade'];
        }

        mysqli_close($conn);
        return implode(",",$sala);
    }
    else{
        return "Um valor em falta";
    }
}

public function listar_alunos($email, $token)
{
	require "ws3db_config.php";
	$login = new WS3_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
		
		 $query = "select * from aluno";
        $result = mysqli_query($conn, $query);
        $aluno = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $aluno[] = "aluno_id - ".$row['aluno_id'].", nome - ".$row['nome'].", apelido - ".$row['apelido'].", idade - ".$row['idade'].", contato - ".$row['contato'].", email - ".$row['email'];
        }

        mysqli_close($conn);
        return implode (",",$aluno); 
    }
    else{
        return "Um valor em falta";
    }
}

} /* end of class WS3_Admin */

?>