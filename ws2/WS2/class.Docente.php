<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - WS2\class.Docente.php
 *
 * $Id$
 *
 * This file is part of modeloSemTitulo.
 *
 * Automatically generated on 28.12.2016, 21:16:44 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 * @package WS2
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include WS2_Aluno
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Aluno.php');

/**
 * include WS2_Aula
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Aula.php');

/**
 * include WS2_Disciplina
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Disciplina.php');

/**
 * include WS2_Ensina
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Ensina.php');

/**
 * include WS2_Horario
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Horario.php');

/**
 * include WS2_Login
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Login.php');

/**
 * include WS2_Nota
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Nota.php');

/**
 * include WS2_Presenca
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Presenca.php');

/**
 * include WS2_Turma
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Turma.php');

/* user defined includes */
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:0000000000000867-includes begin
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:0000000000000867-includes end

/* user defined constants */
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:0000000000000867-constants begin
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:0000000000000867-constants end

/**
 * Short description of class WS2_Docente
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS2
 */
class WS2_Docente
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute docente_id
     *
     * @access public
     * @var Integer
     */
    public $docente_id = null;

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
     * Short description of attribute idade
     *
     * @access public
     * @var Integer
     */
    public $idade = null;

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
     * Short description of method verHorario
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function verHorario($email, $token)
{
	require "ws2db_config.php";
	$login = new WS2_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
		
		$query1="select docente_id from docente where email = '".$email."';";
		$result1 =mysqli_fetch_assoc(mysqli_query($conn, $query1));
		//$docente_id=$result1[docente_id];
		
		$query2="select aula_id from aula where docente_id = '".implode (",",$result1)."';";
		$result2 =mysqli_fetch_assoc(mysqli_query($conn, $query2));
		//$aula_id=$result2[aula_id];
		
		$query3="select * from horario where aula_id = '".implode (",",$result2)."';";
		$result3= mysqli_query($conn, $query3);
		//$horario=$result3[horario];
		
		$horario1 = array();
        while ($row = mysqli_fetch_assoc($result3)) {
            $horario1[] = "horario_id - ".$row['horario_id'].", aula_id - ".$row['aula_id'].", hora_inicio - ".$row['hora_inicio'].", hora_fim - ".$row['hora_fim'];

        }
		return implode (",",$horario1); 
    }
    else{
        return "Um valor em falta";
    }
}

    /**
     * Short description of method listarPresencas
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listarPresencas($email, $token, $horario_id, $aluno_id, $presenca)
    {
        require "ws2db_config.php";
	$login = new WS2_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
					
        $query = "insert into presenca (horario_id, aluno_id, presenca) values ('" . $horario_id . "','" . $aluno_id . "','" . $presenca . "')";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        if ($result) {
            return "presenca marcada com sucesso!";
        } else {
            return "presenca nao marcada";
        }
    }
    else{
        return "Um valor em falta";
    }
    }

    /**
     * Short description of method salasLivres
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function salasLivres()
    {
        // section -64--88-56-1--68bea28f:15917844b5a:-8000:0000000000000A0A begin
        // section -64--88-56-1--68bea28f:15917844b5a:-8000:0000000000000A0A end
    }

    /**
     * Short description of method darNota
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function darNota($email, $token, $aluno_id, $nota, $data, $disciplina_id)
    {
        require "ws2db_config.php";
	$login = new WS2_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
					
        $query = "insert into notas (aluno_id, nota, data, disciplina_id) values ('" . $aluno_id . "','" . $nota . "','" . $data . "','" . $disciplina_id . "')";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        if ($result) {
            return "Nota dada com sucesso!";
        } else {
            return "Nota nao atribuida";
        }
    }
    else{
        return "Um valor em falta";
    }
    }

    /**
     * Short description of method preencherSumario
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function preencherSumario($email, $token, $aula_id, $sumario)
    {
        require "ws2db_config.php";
	$login = new WS2_Login();
		$autent = $login->validate($email, $token);
        if($autent==$token){
					
        $query = "UPDATE aula SET sumario='".$sumario."' WHERE aula_id='".$aula_id."'";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        if ($result) {
            return "Sumario inserido com sucesso!";
        } else {
            return "sumario nao inserido";
        }
    }
    else{
        return "Um valor em falta";
    }
    }

    /**
     * Short description of method atualizarDados
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function atualizarDados($email,$nome,$apelido,$idade,$morada)
    {
        require "ws2db_config.php";

				
		//Update os valores
			$sql = "UPDATE docente SET nome='".$nome."', apelido='".$apelido."', idade='".$idade."', morada='".$morada."' WHERE email='".$email."';";
			//echo $sql;
            $abc= mysqli_query($conn, $sql);
		if ($abc){
            return "UPDATE FEITO COM SUCESSO!";
        }
        else{
            return "Erro no update base de dados!";
        }
    }

} /* end of class WS2_Docente */

?>