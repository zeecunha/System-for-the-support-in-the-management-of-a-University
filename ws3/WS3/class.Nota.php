<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Nota.php
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

/**
 * include WS3_Aluno
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Aluno.php');

/**
 * include WS3_Curso
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Curso.php');

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
// section -64--88-56-1--7ec97889:158c5d2f29a:-8000:0000000000000A3F-includes begin
// section -64--88-56-1--7ec97889:158c5d2f29a:-8000:0000000000000A3F-includes end

/* user defined constants */
// section -64--88-56-1--7ec97889:158c5d2f29a:-8000:0000000000000A3F-constants begin
// section -64--88-56-1--7ec97889:158c5d2f29a:-8000:0000000000000A3F-constants end

/**
 * Short description of class WS3_Nota
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Nota
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute aluno_id
     *
     * @access public
     * @var Integer
     */
    public $aluno_id = null;

    /**
     * Short description of attribute nota
     *
     * @access public
     * @var Integer
     */
    public $nota = null;

    /**
     * Short description of attribute data
     *
     * @access public
     * @var Date
     */
    public $data = null;

    /**
     * Short description of attribute nota_id
     *
     * @access public
     * @var Integer
     */
    public $nota_id = null;

    /**
     * Short description of attribute disciplina_id
     *
     * @access public
     * @var Integer
     */
    public $disciplina_id = null;

    // --- OPERATIONS ---

    /**
     * Short description of method listarNotas
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listarNotas($email, $token)
    {
        require "ws3db_config.php";
	$autent=validate($email, $token);
        if($autent==$token){
		
		 $query = "select * from notas";
        $result = mysqli_query($conn, $query);
        $notas = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $notas[] = "nota_id - ".$row['nota_id'].", aluno_id - ".$row['aluno_id'].", nota - ".$row['nota'].", data - ".$row['data'].", disciplina_id - ".$row['disciplina_id'];
        }

        mysqli_close($conn);
        return implode (",",$notas); 
    }
    else{
        return "Um valor em falta";
    }
    }

} /* end of class WS3_Nota */

?>