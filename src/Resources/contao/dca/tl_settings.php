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
 * palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'fen_rand';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{fen_legend:hide},fen_figurengroesse,fen_figurensatz,fen_rand,fen_farbeweiss,fen_farbeschwarz,fen_koordinaten,fen_everdefault';

$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['fen_rand'] = 'fen_randbreite,fen_randfarbe';

/**
 * fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['fen_figurengroesse'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['fen_figurengroesse'],
	'inputType'     => 'select',
	'options'       => array('20', '25', '30', '35', '40'),
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['fen_figurensatz'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['fen_figurensatz'],
	'inputType'     => 'select',
	'options'       => array('adventurer','alfonso','cases','condal','harlequin','kingdom','leipzig','line','lucena','magnetic','mark','marroquin','maya','mediaeval','merida','motif'),
	'reference'     => &$GLOBALS['TL_LANG']['tl_settings']['fen_figurensatz_option'],
	'eval'          => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['fen_rand'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['fen_rand'],
	'inputType'     => 'checkbox',
	'eval'          => array('tl_class' => 'w50','isBoolean' => true,'submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['fen_randbreite'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['fen_randbreite'],
	'inputType'     => 'select',
	'options'       => array('1','2','3','4','5','6'),
	'eval'          => array('tl_class' => 'w50 clr')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['fen_randfarbe'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['fen_randfarbe'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50','colorpicker'=>true)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['fen_farbeweiss'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['fen_farbeweiss'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50 clr','colorpicker'=>true)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['fen_farbeschwarz'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['fen_farbeschwarz'],
	'inputType'     => 'text',
	'eval'          => array('tl_class' => 'w50','colorpicker'=>true)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['fen_koordinaten'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['fen_koordinaten'],
	'inputType'     => 'checkbox',
	'eval'          => array('tl_class' => 'w50 clr')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['fen_everdefault'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['fen_everdefault'],
	'inputType'     => 'checkbox',
	'eval'          => array('tl_class' => 'w50 clr')
);

?>
