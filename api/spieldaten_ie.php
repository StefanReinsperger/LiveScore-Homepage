<?php
	
	header('Content-Type: text/html; charset=UTF-8'); 
	
	if (file_exists('livescore.xml')) {
		$xml = simplexml_load_file('livescore.xml');
	}
	
	$daten = $_GET['daten'];
	$nr = $_GET['nr'];
	
	if (($nr == 1) && ($daten == 'spieler')) {
		echo $xml->aktuell->spieler[0]->s1;
		
		if (strlen($xml->aktuell->spieler[0]->s3) > 1) {
			echo ' / <br />';
			echo $xml->aktuell->spieler[0]->s3;
		}
	} else if (($nr == 2) && ($daten == 'spieler')) {
		echo $xml->aktuell->spieler[0]->s2;
	
		if (strlen($xml->aktuell->spieler[0]->s4) > 1) {
			echo ' / <br />';
			echo $xml->aktuell->spieler[0]->s4;
		}
	} else if (($nr == 1) && ($daten == 'punkte')) {
		echo $xml->aktuell[0]->punkte[0]->a;
	} else if (($nr == 2) && ($daten == 'punkte')) {
		echo $xml->aktuell[0]->punkte[0]->b;
	} else if (($nr == 1) && ($daten == 'saetze')) {
		echo $xml->aktuell[0]->saetze[0]->a;
	} else if (($nr == 2) && ($daten == 'saetze')) {
		echo $xml->aktuell[0]->saetze[0]->b;
	} else if (($nr == 1) && ($daten == 'stand')) {
		echo $xml->stand[0]->a;
	} else if (($nr == 2) && ($daten == 'stand')) {
		echo $xml->stand[0]->b;
	} else if (($nr == 1) && ($daten == 'bild')) {
		echo "<img src=\"http://livescore.uttc-stockerau.at/images/players/{$xml->logo[0]->a}/{$xml->aktuell->spieler[0]->s1}.png\" />\n\n";
	} else if (($nr ==2) && ($daten == 'bild')) {
		echo "<img src=\"http://livescore.uttc-stockerau.at/images/players/{$xml->logo[0]->b}/{$xml->aktuell->spieler[0]->s2}.png\" />\n\n";
	}
?>