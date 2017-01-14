<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - WS2\class.Nota.php
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
 * include WS2_Disciplina
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Disciplina.php');

/**
 * include WS2_Docente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Docente.php');

/**
 * include WS2_Turma
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS2/class.Turma.php');

/* user defined includes */
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:00000000000008A9-includes begin
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:00000000000008A9-includes end

/* user defined constants */
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:00000000000008A9-constants begin
// section -64--88-56-1-4876de71:158c5cc6e04:-8000:00000000000008A9-constants end

/**
 * Short description of class WS2_Nota
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS2
 */
class WS2_Nota
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

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
     * Short description of attribute disciplina_id
     *
     * @access public
     * @var Integer
     */
    public $disciplina_id = null;

    /**
     * Short description of attribute nota_id
     *
     * @access public
     * @var Integer
     */
    public $nota_id = null;

    // --- OPERATIONS ---

} /* end of class WS2_Nota */

?>