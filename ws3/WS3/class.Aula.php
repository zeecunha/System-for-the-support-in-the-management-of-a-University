<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Aula.php
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
 * include WS3_Docente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Docente.php');

/**
 * include WS3_Horario
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Horario.php');

/**
 * include WS3_Sala
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Sala.php');

/**
 * include WS3_Turma
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Turma.php');

/* user defined includes */
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AB2-includes begin
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AB2-includes end

/* user defined constants */
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AB2-constants begin
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AB2-constants end

/**
 * Short description of class WS3_Aula
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Aula
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute aula_id
     *
     * @access public
     * @var integer
     */
    public $aula_id = null;

    /**
     * Short description of attribute disciplina
     *
     * @access public
     * @var integer
     */
    public $disciplina = null;

    /**
     * Short description of attribute turma_id
     *
     * @access public
     * @var integer
     */
    public $turma_id = null;

    /**
     * Short description of attribute sala_id
     *
     * @access public
     * @var integer
     */
    public $sala_id = null;

    /**
     * Short description of attribute docente_id
     *
     * @access public
     * @var integer
     */
    public $docente_id = null;

    /**
     * Short description of attribute sumario
     *
     * @access public
     * @var String
     */
    public $sumario = null;

    /**
     * Short description of attribute duracao
     *
     * @access public
     * @var integer
     */
    public $duracao = null;

    // --- OPERATIONS ---

    /**
     * Short description of method listarAula
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listarAula()
    {
		require "ws3db_config.php";
        $sql = "SELECT * FROM aula";
				$result = mysqli_query($conn,$sql);
				$aula = array();
				while ($row=mysqli_fetch_array($result)) {
					//echo "<option value='".$row['aula_id']."'>".$row['disciplina_id']." ".$row['docente_id'].".</option>";
					$aula[] = "<option value='".$row['aula_id']."'>".$row['disciplina_id']." ".$row['docente_id'].".</option>";
				}
					return implode (",",$aula);
    }

} /* end of class WS3_Aula */

?>