<?php
/**
 * Utilisations de pipelines par Coyotours
 *
 * @plugin     Coyotours
 * @copyright  2013
 * @author     Web Simple
 * @licence    GNU/GPL
 * @package    SPIP\Coyotours\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;
	

/*
 * Un fichier de pipelines permet de regrouper
 * les fonctions de branchement de votre plugin
 * sur des pipelines existants.
 */

function coyotours_insert_head($flux){
    $flux .= "<link rel='stylesheet' href='".find_in_path("css/")."' type='text/css' />\n";
    return $flux;
}

?>