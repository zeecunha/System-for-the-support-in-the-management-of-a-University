<?php

error_reporting(E_ALL);

/**
 * untitledModel - WS3\class.Aluno.php
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

/**
 * include WS3_Horario
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Horario.php');

/**
 * include WS3_Login
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Login.php');

/**
 * include WS3_Nota
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('WS3/class.Nota.php');

/* user defined includes */
// section -64--88-56-1-4d6b5fc9:158c58b0b5a:-8000:0000000000000A11-includes begin
// section -64--88-56-1-4d6b5fc9:158c58b0b5a:-8000:0000000000000A11-includes end

/* user defined constants */
// section -64--88-56-1-4d6b5fc9:158c58b0b5a:-8000:0000000000000A11-constants begin
// section -64--88-56-1-4d6b5fc9:158c58b0b5a:-8000:0000000000000A11-constants end

/**
 * Short description of class WS3_Aluno
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS3
 */
class WS3_Aluno
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute aluno_id
     *
     * @access public
     * @var Integer
     */
    public $aluno_id = null;

    /**
     * Short description of attribute nome
     *
     * @access public
     * @var String
     */
    public $nome = null;

    /**
     * Short description of attribute apelido
     *
     * @access public
     * @var String
     */
    public $apelido = null;

    /**
     * Short description of attribute idade
     *
     * @access public
     * @var Integer
     */
    public $idade = null;

    /**
     * Short description of attribute morada
     *
     * @access public
     * @var String
     */
    public $morada = null;

    /**
     * Short description of attribute contato
     *
     * @access public
     * @var Integer
     */
    public $contato = null;

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

} /* end of class WS3_Aluno */

?>