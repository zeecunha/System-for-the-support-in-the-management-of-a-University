<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - WS2\class.Aluno.php
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
 * include WS2_Disciplina
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Disciplina.php');

/**
 * include WS2_Docente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Docente.php');

/**
 * include WS2_Horario
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Horario.php');

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
// section -64--88-56-1-67d4ea6b:15917ff6ac6:-8000:0000000000000A05-includes begin
// section -64--88-56-1-67d4ea6b:15917ff6ac6:-8000:0000000000000A05-includes end

/* user defined constants */
// section -64--88-56-1-67d4ea6b:15917ff6ac6:-8000:0000000000000A05-constants begin
// section -64--88-56-1-67d4ea6b:15917ff6ac6:-8000:0000000000000A05-constants end

/**
 * Short description of class WS2_Aluno
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS2
 */
class WS2_Aluno
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute aluno_id
     *
     * @access public
     * @var Integer
     */
    public $aluno_id = null;

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
     * Short description of attribute morada
     *
     * @access public
     * @var String
     */
    public $morada = null;

    /**
     * Short description of attribute contato
     *
     * @access public
     * @var Integer
     */
    public $contato = null;

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

    /**
     * Short description of attribute email
     *
     * @access public
     * @var String
     */
   // public $email = null;

    // --- OPERATIONS ---

    /**
     * Short description of method listarAluno
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listarAluno()
    {
		require "ws2db_config.php";
        $sql = "SELECT * FROM aluno";
				$result = mysqli_query($conn,$sql);
				$aluno = array();
				while ($row=mysqli_fetch_array($result)) {
					//echo "<option value='".$row['aluno_id']."'>".$row['nome']." ".$row['apelido'].".</option>";
					$aluno[] = "<option value='".$row['aluno_id']."'>".$row['nome']." ".$row['apelido'].".</option>";
				}
				return implode (",",$aluno);
    }

} /* end of class WS2_Aluno */

?>