<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Turma.php
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

/* user defined includes */
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AC9-includes begin
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AC9-includes end

/* user defined constants */
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AC9-constants begin
// section -64--88-56-1--66dce154:1594162fc33:-8000:0000000000000AC9-constants end

/**
 * Short description of class WS3_Turma
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Turma
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute turma_id
     *
     * @access public
     * @var integer
     */
    public $turma_id = null;

    /**
     * Short description of attribute aluno_id
     *
     * @access public
     * @var integer
     */
    public $aluno_id = null;

    /**
     * Short description of attribute curso_id
     *
     * @access public
     * @var integer
     */
    public $curso_id = null;

    /**
     * Short description of attribute nome
     *
     * @access public
     * @var String
     */
    public $nome = null;

    // --- OPERATIONS ---

    /**
     * Short description of method listarTurma
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function listarTurma()
    {
		require "ws3db_config.php";
        $sql = "SELECT * FROM turma";
							$result = mysqli_query($conn,$sql);
							$turma = array();
							while ($row=mysqli_fetch_array($result)) {
								//echo "<option value='".$row['turma_id']."'>".$row['nome']."</option>";
								$turma[] = "<option value='".$row['turma_id']."'>".$row['nome']."</option>";
							}
							return implode (",",$turma);
    }
	

} /* end of class WS3_Turma */

?>