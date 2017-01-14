<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Login.php
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
 * include WS3_Admin
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Admin.php');

/* user defined includes */
// section -64--88-56-1-5a24ee5d:158bc93f8b0:-8000:0000000000000880-includes begin
// section -64--88-56-1-5a24ee5d:158bc93f8b0:-8000:0000000000000880-includes end

/* user defined constants */
// section -64--88-56-1-5a24ee5d:158bc93f8b0:-8000:0000000000000880-constants begin
// section -64--88-56-1-5a24ee5d:158bc93f8b0:-8000:0000000000000880-constants end

/**
 * Short description of class WS3_Login
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Login
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute email
     *
     * @access public
     * @var Integer
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
        require "ws3db_config.php";
        
        $query =  "select token from admin where email='" . $email . "';";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $query));
        mysqli_close($conn);
         if($token==$result['token']){
            return $token;
        }else{
            return "Nao validou";
        }
    }

} /* end of class WS3_Login */

?>