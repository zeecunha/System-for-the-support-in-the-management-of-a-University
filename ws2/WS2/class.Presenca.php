<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - WS2\class.Presenca.php
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

/* user defined includes */
// section -64--88-56-1--4810f046:15941514142:-8000:0000000000000ACE-includes begin
// section -64--88-56-1--4810f046:15941514142:-8000:0000000000000ACE-includes end

/* user defined constants */
// section -64--88-56-1--4810f046:15941514142:-8000:0000000000000ACE-constants begin
// section -64--88-56-1--4810f046:15941514142:-8000:0000000000000ACE-constants end

/**
 * Short description of class WS2_Presenca
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS2
 */
class WS2_Presenca
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute presenca_id
     *
     * @access public
     * @var Integer
     */
    public $presenca_id = null;

    /**
     * Short description of attribute horario_id
     *
     * @access public
     * @var Integer
     */
    public $horario_id = null;

    /**
     * Short description of attribute aluno_id
     *
     * @access public
     * @var Integer
     */
    public $aluno_id = null;

    /**
     * Short description of attribute presenca
     *
     * @access public
     * @var String
     */
    public $presenca = null;

    // --- OPERATIONS ---

} /* end of class WS2_Presenca */

?>