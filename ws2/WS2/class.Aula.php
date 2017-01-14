<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - WS2\class.Aula.php
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
 * include WS2_Sala
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Sala.php');

/**
 * include WS2_Turma
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Turma.php');

/* user defined includes */
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:000000000000088B-includes begin
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:000000000000088B-includes end

/* user defined constants */
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:000000000000088B-constants begin
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:000000000000088B-constants end

/**
 * Short description of class WS2_Aula
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS2
 */
class WS2_Aula
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 1    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute aula_id
     *
     * @access public
     * @var Integer
     */
    public $aula_id = null;

    /**
     * Short description of attribute disciplina_id
     *
     * @access public
     * @var Integer
     */
    public $disciplina_id = null;

    /**
     * Short description of attribute turma_id
     *
     * @access public
     * @var Integer
     */
    public $turma_id = null;

    /**
     * Short description of attribute sala_id
     *
     * @access public
     * @var Integer
     */
    public $sala_id = null;

    /**
     * Short description of attribute docente_id
     *
     * @access public
     * @var Integer
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
     * @var Integer
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
		require "ws2db_config.php";
        $sql = "SELECT * FROM aula";
				$result = mysqli_query($conn,$sql);
				$aula = array();
				while ($row=mysqli_fetch_array($result)) {
					//echo "<option value='".$row['aula_id']."'>".$row['disciplina_id']." ".$row['docente_id'].".</option>";
					$aula[] = "<option value='".$row['aula_id']."'>".$row['disciplina_id']." ".$row['docente_id'].".</option>";
				}
					return implode (",",$aula);
    }

} /* end of class WS2_Aula */

?>