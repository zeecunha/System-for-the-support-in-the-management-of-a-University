<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - WS2\class.Disciplina.php
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
 * include WS2_Docente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Docente.php');

/**
 * include WS2_Ensina
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Ensina.php');

/**
 * include WS2_Nota
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Nota.php');

/* user defined includes */
// section -64--88-56-1-67d4ea6b:15917ff6ac6:-8000:0000000000000A3C-includes begin
// section -64--88-56-1-67d4ea6b:15917ff6ac6:-8000:0000000000000A3C-includes end

/* user defined constants */
// section -64--88-56-1-67d4ea6b:15917ff6ac6:-8000:0000000000000A3C-constants begin
// section -64--88-56-1-67d4ea6b:15917ff6ac6:-8000:0000000000000A3C-constants end

/**
 * Short description of class WS2_Disciplina
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS2
 */
class WS2_Disciplina
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute disciplina_id
     *
     * @access public
     * @var Integer
     */
    public $disciplina_id = null;

    /**
     * Short description of attribute nome
     *
     * @access public
     * @var String
     */
    public $nome = null;

    /**
     * Short description of attribute ects
     *
     * @access public
     * @var Integer
     */
    public $ects = null;

    /**
     * Short description of attribute curso_id
     *
     * @access public
     * @var Integer
     */
    public $curso_id = null;

    /**
     * Short description of attribute ano
     *
     * @access public
     * @var Integer
     */
    public $ano = null;

    /**
     * Short description of attribute semestre
     *
     * @access public
     * @var Integer
     */
    public $semestre = null;

    /**
     * Short description of attribute newAttr
     *
     * @access public
     * @var Integer
     */
    public $newAttr = null;

    // --- OPERATIONS ---

    /**
     * Short description of method listarDisciplina
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listarDisciplina()
    {
		require "ws2db_config.php";
        $sql = "SELECT * FROM disciplina";
				$result = mysqli_query($conn,$sql);
				$disciplina = array();
				while ($row=mysqli_fetch_array($result)) {
					//echo "<option value='".$row['disciplina_id']."'>".$row['nome']." - ".$row['curso_id'].".</option>";
					$disciplina[] = "<option value='".$row['disciplina_id']."'>".$row['nome']." - ".$row['curso_id'].".</option>";
				}
				return implode (",",$disciplina);
    }

} /* end of class WS2_Disciplina */

?>