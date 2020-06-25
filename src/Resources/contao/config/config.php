<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   fen
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

/**
 * -------------------------------------------------------------------------
 * CONTENT ELEMENTS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_CTE']['schach']['fen'] = 'Schachbulle\ContaoFenBundle\ContentElements\FEN';

/**
 * -------------------------------------------------------------------------
 * Voreinstellungen
 * -------------------------------------------------------------------------
 */

$GLOBALS['TL_CONFIG']['fen_rand'] = false;
$GLOBALS['TL_CONFIG']['fen_figurengroesse'] = 35;
$GLOBALS['TL_CONFIG']['fen_figurensatz'] = 'merida';
$GLOBALS['TL_CONFIG']['fen_randbreite'] = 1;
$GLOBALS['TL_CONFIG']['fen_randfarbe'] = 636060;
$GLOBALS['TL_CONFIG']['fen_farbeweiss'] = 'eecfa3';
$GLOBALS['TL_CONFIG']['fen_farbeschwarz'] = '8a8a8a';
$GLOBALS['TL_CONFIG']['fen_koordinaten'] = true;
