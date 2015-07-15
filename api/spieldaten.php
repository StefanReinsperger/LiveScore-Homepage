<?php
	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');
	
	if (file_exists('livescore.xml')) {
		$xml = simplexml_load_file('livescore.xml');
	}
	
	$daten = $_GET['daten'];
	$nr = $_GET['nr'];
	
	if (($nr == 1) && ($daten == 'spieler')) {
		echo "data: {$xml->aktuell->spieler[0]->s1}\n\n";
		
		if (strlen($xml->aktuell->spieler[0]->s3) > 1) {
			echo " / <br />{$xml->aktuell->spieler[0]->s3}\n\n";
		}
	} else if (($nr == 2) && ($daten == 'spieler')) {
		echo "data: {$xml->aktuell->spieler[0]->s2}\n\n";
	
		if (strlen($xml->aktuell->spieler[0]->s4) > 1) {
			echo " / <br />{$xml->aktuell->spieler[0]->s4}\n\n";
		}
	} else if (($nr == 1) && ($daten == 'punkte')) {
		echo "data: {$xml->aktuell[0]->punkte[0]->a}\n\n";
	} else if (($nr == 2) && ($daten == 'punkte')) {
		echo "data: {$xml->aktuell[0]->punkte[0]->b}\n\n";
	} else if (($nr == 1) && ($daten == 'saetze')) {
		echo "data: {$xml->aktuell[0]->saetze[0]->a}\n\n";
	} else if (($nr == 2) && ($daten == 'saetze')) {
		echo "data: {$xml->aktuell[0]->saetze[0]->b}\n\n";
	} else if (($nr == 1) && ($daten == 'stand')) {
		echo "data: {$xml->stand[0]->a}\n\n";
	} else if (($nr == 2) && ($daten == 'stand')) {
		echo "data: {$xml->stand[0]->b}\n\n";
	} else if (($nr == 1) && ($daten == 'bild')) {
		echo "data: <img src=\"http://livescore.uttc-stockerau.at/images/players/{$xml->logo[0]->a}/{$xml->aktuell->spieler[0]->s1}.png\" />\n\n";
	} else if (($nr ==2) && ($daten == 'bild')) {
		echo "data: <img src=\"http://livescore.uttc-stockerau.at/images/players/{$xml->logo[0]->b}/{$xml->aktuell->spieler[0]->s2}.png\" />\n\n";
	}
	
	flush();
?>