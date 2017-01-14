<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Curso.php
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
 * include WS3_Disciplina
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Disciplina.php');

/**
 * include WS3_Nota
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Nota.php');

/* user defined includes */
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000A97-includes begin
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000A97-includes end

/* user defined constants */
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000A97-constants begin
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000A97-constants end

/**
 * Short description of class WS3_Curso
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Curso
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute curso_id
     *
     * @access public
     * @var Integer
     */
    public $curso_id = null;

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
     * Short description of attribute descricao
     *
     * @access public
     * @var String
     */
    public $descricao = null;

    // --- OPERATIONS ---

    /**
     * Short description of method listarCurso
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listarCurso()
    {
		require "ws3db_config.php";
        $sql = "SELECT * FROM curso";
        $result = mysqli_query($conn,$sql);
		$curso = array();
        while ($row=mysqli_fetch_array($result)) {
			$curso[] = "<option value='".$row['curso_id']."'>".$row['nome']." - ".$row['descricao'].".</option>";
            //echo "<option value='".$row['curso_id']."'>".$row['nome']." - ".$row['descricao'].".</option>";
        }
		return implode (",",$curso);
    }

} /* end of class WS3_Curso */

?>