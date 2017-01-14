<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Horario.php
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
 * include WS3_Aula
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Aula.php');

/**
 * include WS3_Disciplina
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Disciplina.php');

/**
 * include WS3_Docente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Docente.php');

/* user defined includes */
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AA4-includes begin
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AA4-includes end

/* user defined constants */
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AA4-constants begin
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AA4-constants end

/**
 * Short description of class WS3_Horario
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Horario
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

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

} /* end of class WS3_Horario */

?>