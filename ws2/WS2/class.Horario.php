<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - WS2\class.Horario.php
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
 * include WS2_Docente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Docente.php');

/* user defined includes */
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:00000000000008BE-includes begin
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:00000000000008BE-includes end

/* user defined constants */
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:00000000000008BE-constants begin
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:00000000000008BE-constants end

/**
 * Short description of class WS2_Horario
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS2
 */
class WS2_Horario
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute horario_id
     *
     * @access public
     * @var Integer
     */
    public $horario_id = null;

    /**
     * Short description of attribute aula_id
     *
     * @access public
     * @var Integer
     */
    public $aula_id = null;

    /**
     * Short description of attribute hora_inicio
     *
     * @access public
     * @var Integer
     */
    public $hora_inicio = null;

    /**
     * Short description of attribute hora_fim
     *
     * @access public
     * @var Integer
     */
    public $hora_fim = null;

    // --- OPERATIONS ---

    /**
     * Short description of method listarHorario
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listarHorario()
    {
		require "ws2db_config.php";
        $sql = "SELECT * FROM horario";
				$result = mysqli_query($conn,$sql);
				$horario = array();
				while ($row=mysqli_fetch_array($result)) {
					//echo "<option value='".$row['horario_id']."'>".$row['aula_id'].".</option>";
					$horario[] = "<option value='".$row['horario_id']."'>".$row['aula_id'].".</option>";
				}
				return implode (",",$horario);
    }

} /* end of class WS2_Horario */

?>