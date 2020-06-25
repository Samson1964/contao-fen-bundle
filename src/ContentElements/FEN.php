<?php

namespace Schachbulle\ContaoFenBundle\ContentElements;

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   fen
 * Version    1.0.0
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

class FEN extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_fen';

	/**
	 * Generate the module
	 */
	protected function compile()
	{

		$this->Template = new \FrontendTemplate($this->strTemplate);

		// TRUE, wenn Voreinstellungen die Element-Einstellungen überschreiben sollen
		$default = $GLOBALS['TL_CONFIG']['fen_everdefault'];

		// Parameter zuweisen
		$fen_code = $this->fen_code;
		$fen_untertitel = $this->fen_untertitel;
		$fen_figurensatz = $default ? $GLOBALS['TL_CONFIG']['fen_figurensatz'] : $this->fen_figurensatz;
		$fen_figurengroesse = $default ? $GLOBALS['TL_CONFIG']['fen_figurengroesse'] : $this->fen_figurengroesse;
		$fen_koordinaten = $default ? $GLOBALS['TL_CONFIG']['fen_koordinaten'] : $this->fen_koordinaten;
		$fen_brettdrehen = $this->fen_brettdrehen;
		$fen_rand = $default ? $GLOBALS['TL_CONFIG']['fen_rand'] : $this->fen_rand;
		$fen_text = $this->fen_text;
		$fen_textfluss = $this->fen_textfluss;
		$fen_randbreite = $default ? $GLOBALS['TL_CONFIG']['fen_randbreite'] : $this->fen_randbreite;
		$fen_randfarbe = $default ? $GLOBALS['TL_CONFIG']['fen_randfarbe'] : $this->fen_randfarbe;
		$fen_farbeweiss = $default ? $GLOBALS['TL_CONFIG']['fen_farbeweiss'] : $this->fen_farbeweiss;
		$fen_farbeschwarz = $default ? $GLOBALS['TL_CONFIG']['fen_farbeschwarz'] : $this->fen_farbeschwarz;

		// FEN-Code auf Stellung kürzen (es werden nicht alle Parameter von ChessImager unterstützt)
		$temp = explode(" ",$fen_code);
		$params = "fen=".$temp[0];

		// Figurensatz
		if($fen_figurensatz) $params .= "&piece_style=".$fen_figurensatz;
		else $params .= "&piece_style=";

		// Figurengröße
		$params .= "&square_size=".$fen_figurengroesse;

		// Koordinaten
		if($fen_koordinaten) $params .= "&coordinates=on";
		else $params .= "&coordinates=off";

		// Brett drehen, Schwarz unten
		if($fen_brettdrehen) $params .= "&direction=reverse";
		else $params .= "&direction=";

		// Brettrand (Breite und Farbe)
		if($fen_rand)
		{
			$params .= "&border_width=".$fen_randbreite;
			$params .= "&border_color=".$this->HEXtoRGB($fen_randfarbe);
		}
		else
		{
			$params .= "&border_width=0";
			$params .= "&border_color=";
		}

		// Farbe weiße Felder
		if($fen_farbeweiss) $params .= "&ls_color=".$this->HEXtoRGB($fen_farbeweiss);
		else $params .= "&ls_color=";

		// Farbe schwarze Felder
		if($fen_farbeschwarz) $params .= "&ds_color=".$this->HEXtoRGB($fen_farbeschwarz);
		else $params .= "&ds_color=";

		// Diagrammgröße errechnen
		$diasize = ((int)$fen_figurengroesse * 8) + ((int)$fen_rand * 2);
		if($fen_koordinaten) $diasize = $diasize + 50;

		// Template ausgeben
		$this->Template->class = "ce_fen";
		$this->Template->caption = $fen_untertitel;
		$this->Template->text = $fen_text;
		$this->Template->floatClass = $fen_textfluss;
		if($fen_textfluss == "left" || $fen_textfluss == "right") $this->Template->alignment = $fen_textfluss;
		$this->Template->diasize = $diasize;
		$this->Template->params = $params;
		return;

	}

	protected function HEXtoRGB($RGB)
	{

		$R = hexdec(substr($RGB,0,2));
		$G = hexdec(substr($RGB,2,2));
		$B = hexdec(substr($RGB,4,2));
		return '('.$R.','.$G.','.$B.')';

	}

}
