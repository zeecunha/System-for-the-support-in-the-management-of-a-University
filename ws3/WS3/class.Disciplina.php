<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Disciplina.php
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
 * include WS3_Curso
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Curso.php');

/**
 * include WS3_Docente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Docente.php');

/**
 * include WS3_Ensina
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Ensina.php');

/**
 * include WS3_Horario
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Horario.php');

/**
 * include WS3_Nota
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Nota.php');

/**
 * include WS3_Sala
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Sala.php');

/* user defined includes */
// section -64--88-56-1--19f74414:158c4ff157c:-8000:0000000000000988-includes begin
// section -64--88-56-1--19f74414:158c4ff157c:-8000:0000000000000988-includes end

/* user defined constants */
// section -64--88-56-1--19f74414:158c4ff157c:-8000:0000000000000988-constants begin
// section -64--88-56-1--19f74414:158c4ff157c:-8000:0000000000000988-constants end

/**
 * Short description of class WS3_Disciplina
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Disciplina
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

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
     * Short description of attribute curso-id
     *
     * @access public
     * @var Integer
     */
    public $curso_id = null;

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
		require "ws3db_config.php";
        $sql = "SELECT * FROM disciplina";
				$result = mysqli_query($conn,$sql);
				$disciplina = array();
				while ($row=mysqli_fetch_array($result)) {
					//echo "<option value='".$row['disciplina_id']."'>".$row['nome'].".</option>";
					
					$disciplina[] = "<option value='".$row['disciplina_id']."'>".$row['nome'].".</option>";
				}
				return implode (",",$disciplina);
    }
	

} /* end of class WS3_Disciplina */

?>