<?php
	
	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');
	
	if (file_exists('livescore.xml')) {
		$xml = simplexml_load_file('livescore.xml');
	}
	
	$spiel = $_GET['spiel'];
	$daten = $_GET['daten'];
	
	if ($spiel == 1) {
		if ($daten == 'sa') {
			echo "data: {$xml->spieldaten[0]->spiel1[0]->sa}\n\n";
		} else if ($daten == 'sb') {
			echo "data: {$xml->spieldaten[0]->spiel1[0]->sb}\n\n";
		} else if ($daten == 'satz1') {
			echo "data: {$xml->spieldaten[0]->spiel1[0]->satz1}\n\n";
		} else if ($daten == 'satz2') {
			echo "data: {$xml->spieldaten[0]->spiel1[0]->satz2}\n\n";
		} else if ($daten == 'satz3') {
			echo "data: {$xml->spieldaten[0]->spiel1[0]->satz3}\n\n";
		} else if ($daten == 'satz4') {
			echo "data: {$xml->spieldaten[0]->spiel1[0]->satz4}\n\n";
		} else if ($daten == 'satz5') {
			echo "data: {$xml->spieldaten[0]->spiel1[0]->satz5}\n\n";
		} else if ($daten == 'gesamt') {
			echo "data: {$xml->spieldaten[0]->spiel1[0]->gesamt}\n\n";
		}
	} else if ($spiel == 2) {
		if ($daten == 'sa') {
			echo "data: {$xml->spieldaten[0]->spiel2[0]->sa}\n\n";
		} else if ($daten == 'sb') {
			echo "data: {$xml->spieldaten[0]->spiel2[0]->sb}\n\n";
		} else if ($daten == 'satz1') {
			echo "data: {$xml->spieldaten[0]->spiel2[0]->satz1}\n\n";
		} else if ($daten == 'satz2') {
			echo "data: {$xml->spieldaten[0]->spiel2[0]->satz2}\n\n";
		} else if ($daten == 'satz3') {
			echo "data: {$xml->spieldaten[0]->spiel2[0]->satz3}\n\n";
		} else if ($daten == 'satz4') {
			echo "data: {$xml->spieldaten[0]->spiel2[0]->satz4}\n\n";
		} else if ($daten == 'satz5') {
			echo "data: {$xml->spieldaten[0]->spiel2[0]->satz5}\n\n";
		} else if ($daten == 'gesamt') {
			echo "data: {$xml->spieldaten[0]->spiel2[0]->gesamt}\n\n";
		}
	} else if ($spiel == 3) {
		if ($daten == 'sa') {
			echo "data: {$xml->spieldaten[0]->spiel3[0]->sa}\n\n";
		} else if ($daten == 'sb') {
			echo "data: {$xml->spieldaten[0]->spiel3[0]->sb}\n\n";
		} else if ($daten == 'satz1') {
			echo "data: {$xml->spieldaten[0]->spiel3[0]->satz1}\n\n";
		} else if ($daten == 'satz2') {
			echo "data: {$xml->spieldaten[0]->spiel3[0]->satz2}\n\n";
		} else if ($daten == 'satz3') {
			echo "data: {$xml->spieldaten[0]->spiel3[0]->satz3}\n\n";
		} else if ($daten == 'satz4') {
			echo "data: {$xml->spieldaten[0]->spiel3[0]->satz4}\n\n";
		} else if ($daten == 'satz5') {
			echo "data: {$xml->spieldaten[0]->spiel3[0]->satz5}\n\n";
		} else if ($daten == 'gesamt') {
			echo "data: {$xml->spieldaten[0]->spiel3[0]->gesamt}\n\n";
		}
	} else if ($spiel == 4) {
		if ($daten == 'sa') {
			echo "data: {$xml->spieldaten[0]->spiel4[0]->sa}\n\n";
		} else if ($daten == 'sb') {
			echo "data: {$xml->spieldaten[0]->spiel4[0]->sb}\n\n";
		} else if ($daten == 'satz1') {
			echo "data: {$xml->spieldaten[0]->spiel4[0]->satz1}\n\n";
		} else if ($daten == 'satz2') {
			echo "data: {$xml->spieldaten[0]->spiel4[0]->satz2}\n\n";
		} else if ($daten == 'satz3') {
			echo "data: {$xml->spieldaten[0]->spiel4[0]->satz3}\n\n";
		} else if ($daten == 'satz4') {
			echo "data: {$xml->spieldaten[0]->spiel4[0]->satz4}\n\n";
		} else if ($daten == 'satz5') {
			echo "data: {$xml->spieldaten[0]->spiel4[0]->satz5}\n\n";
		} else if ($daten == 'gesamt') {
			echo "data: {$xml->spieldaten[0]->spiel4[0]->gesamt}\n\n";
		}
	} else if ($spiel == 5) {
		if ($daten == 'sa') {
			echo "data: {$xml->spieldaten[0]->spiel5[0]->sa}\n\n";
		} else if ($daten == 'sb') {
			echo "data: {$xml->spieldaten[0]->spiel5[0]->sb}\n\n";
		} else if ($daten == 'satz1') {
			echo "data: {$xml->spieldaten[0]->spiel5[0]->satz1}\n\n";
		} else if ($daten == 'satz2') {
			echo "data: {$xml->spieldaten[0]->spiel5[0]->satz2}\n\n";
		} else if ($daten == 'satz3') {
			echo "data: {$xml->spieldaten[0]->spiel5[0]->satz3}\n\n";
		} else if ($daten == 'satz4') {
			echo "data: {$xml->spieldaten[0]->spiel5[0]->satz4}\n\n";
		} else if ($daten == 'satz5') {
			echo "data: {$xml->spieldaten[0]->spiel5[0]->satz5}\n\n";
		} else if ($daten == 'gesamt') {
			echo "data: {$xml->spieldaten[0]->spiel5[0]->gesamt}\n\n";
		}
	} else if ($spiel == 6) {
		if ($daten == 'sa') {
			echo "data: {$xml->spieldaten[0]->spiel6[0]->sa}\n\n";
		} else if ($daten == 'sb') {
			echo "data: {$xml->spieldaten[0]->spiel6[0]->sb}\n\n";
		} else if ($daten == 'satz1') {
			echo "data: {$xml->spieldaten[0]->spiel6[0]->satz1}\n\n";
		} else if ($daten == 'satz2') {
			echo "data: {$xml->spieldaten[0]->spiel6[0]->satz2}\n\n";
		} else if ($daten == 'satz3') {
			echo "data: {$xml->spieldaten[0]->spiel6[0]->satz3}\n\n";
		} else if ($daten == 'satz4') {
			echo "data: {$xml->spieldaten[0]->spiel6[0]->satz4}\n\n";
		} else if ($daten == 'satz5') {
			echo "data: {$xml->spieldaten[0]->spiel6[0]->satz5}\n\n";
		} else if ($daten == 'gesamt') {
			echo "data: {$xml->spieldaten[0]->spiel6[0]->gesamt}\n\n";
		}
	}
	
	flush();
?>