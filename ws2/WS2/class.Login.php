<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - WS2\class.Login.php
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

/* user defined includes */
// section -64--88-56-1--73f3572c:1593b7c7b0b:-8000:0000000000000A8A-includes begin
// section -64--88-56-1--73f3572c:1593b7c7b0b:-8000:0000000000000A8A-includes end

/* user defined constants */
// section -64--88-56-1--73f3572c:1593b7c7b0b:-8000:0000000000000A8A-constants begin
// section -64--88-56-1--73f3572c:1593b7c7b0b:-8000:0000000000000A8A-constants end

/**
 * Short description of class WS2_Login
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS2
 */
class WS2_Login
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute email
     *
     * @access public
     * @var String
     */
    public $email = null;

    /**
     * Short description of attribute token
     *
     * @access public
     * @var String
     */
    public $token = null;

    // --- OPERATIONS ---

    /**
     * Short description of method validate
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function validate($email,$token)
    {
         require "ws2db_config.php";
        
        $query =  "select token from docente where email='" . $email . "';";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $query));
        mysqli_close($conn);
         if($token==$result['token']){
            return $token;
        }else{
            return "Nao validou";
        }
    }

} /* end of class WS2_Login */

?>