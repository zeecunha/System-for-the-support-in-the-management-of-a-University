<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Ensina.php
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
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AD6-includes begin
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AD6-includes end

/* user defined constants */
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AD6-constants begin
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AD6-constants end

/**
 * Short description of class WS3_Ensina
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Ensina
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute ensina_id
     *
     * @access public
     * @var integer
     */
    public $ensina_id = null;

    /**
     * Short description of attribute docente_id
     *
     * @access public
     * @var integer
     */
    public $docente_id = null;

    /**
     * Short description of attribute disciplina_id
     *
     * @access public
     * @var integer
     */
    public $disciplina_id = null;

    // --- OPERATIONS ---

} /* end of class WS3_Ensina */

?>