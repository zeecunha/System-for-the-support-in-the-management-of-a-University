<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Sala.php
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

/* user defined includes */
// section -64--88-56-1--19f74414:158c4ff157c:-8000:0000000000000987-includes begin
// section -64--88-56-1--19f74414:158c4ff157c:-8000:0000000000000987-includes end

/* user defined constants */
// section -64--88-56-1--19f74414:158c4ff157c:-8000:0000000000000987-constants begin
// section -64--88-56-1--19f74414:158c4ff157c:-8000:0000000000000987-constants end

/**
 * Short description of class WS3_Sala
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Sala
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public $id = null;

    /**
     * Short description of attribute numero
     *
     * @access public
     * @var Integer
     */
    public $numero = null;

    /**
     * Short description of attribute capacidade
     *
     * @access public
     * @var Integer
     */
    public $capacidade = null;

    // --- OPERATIONS ---

    /**
     * Short description of method listarSala
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listarSala1()
    {
        require "ws3db_config.php";
		
		 $query = "select * from sala";
        $result = mysqli_query($conn, $query);
        $sala = array();
        while ($row = mysqli_fetch_assoc($result)) {

            $sala[] = "<option value='".$row['sala_id']."'>".$row['numero']."</option>";
        }
        return implode(",",$sala);
    }
    

} /* end of class WS3_Sala */

?>