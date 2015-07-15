<?php
	
	if (file_exists('livescore.xml')) {
		$xml = simplexml_load_file('livescore.xml');
	}
	
	$spiel = $_GET['spiel'];
	$daten = $_GET['daten'];
	
	if ($spiel == 1) {
		if ($daten == 'sa') {
			echo $xml->spieldaten[0]->spiel1[0]->sa;
		} else if ($daten == 'sb') {
			echo $xml->spieldaten[0]->spiel1[0]->sb;
		} else if ($daten == 'satz1') {
			echo $xml->spieldaten[0]->spiel1[0]->satz1;
		} else if ($daten == 'satz2') {
			echo $xml->spieldaten[0]->spiel1[0]->satz2;
		} else if ($daten == 'satz3') {
			echo $xml->spieldaten[0]->spiel1[0]->satz3;
		} else if ($daten == 'satz4') {
			echo $xml->spieldaten[0]->spiel1[0]->satz4;
		} else if ($daten == 'satz5') {
			echo $xml->spieldaten[0]->spiel1[0]->satz5;
		} else if ($daten == 'gesamt') {
			echo $xml->spieldaten[0]->spiel1[0]->gesamt;
		}
	} else if ($spiel == 2) {
		if ($daten == 'sa') {
			echo $xml->spieldaten[0]->spiel2[0]->sa;
		} else if ($daten == 'sb') {
			echo $xml->spieldaten[0]->spiel2[0]->sb;
		} else if ($daten == 'satz1') {
			echo $xml->spieldaten[0]->spiel2[0]->satz1;
		} else if ($daten == 'satz2') {
			echo $xml->spieldaten[0]->spiel2[0]->satz2;
		} else if ($daten == 'satz3') {
			echo $xml->spieldaten[0]->spiel2[0]->satz3;
		} else if ($daten == 'satz4') {
			echo $xml->spieldaten[0]->spiel2[0]->satz4;
		} else if ($daten == 'satz5') {
			echo $xml->spieldaten[0]->spiel2[0]->satz5;
		} else if ($daten == 'gesamt') {
			echo $xml->spieldaten[0]->spiel2[0]->gesamt;
		}
	} else if ($spiel == 3) {
		if ($daten == 'sa') {
			echo $xml->spieldaten[0]->spiel3[0]->sa;
		} else if ($daten == 'sb') {
			echo $xml->spieldaten[0]->spiel3[0]->sb;
		} else if ($daten == 'satz1') {
			echo $xml->spieldaten[0]->spiel3[0]->satz1;
		} else if ($daten == 'satz2') {
			echo $xml->spieldaten[0]->spiel3[0]->satz2;
		} else if ($daten == 'satz3') {
			echo $xml->spieldaten[0]->spiel3[0]->satz3;
		} else if ($daten == 'satz4') {
			echo $xml->spieldaten[0]->spiel3[0]->satz4;
		} else if ($daten == 'satz5') {
			echo $xml->spieldaten[0]->spiel3[0]->satz5;
		} else if ($daten == 'gesamt') {
			echo $xml->spieldaten[0]->spiel3[0]->gesamt;
		}
	} else if ($spiel == 4) {
		if ($daten == 'sa') {
			echo $xml->spieldaten[0]->spiel4[0]->sa;
		} else if ($daten == 'sb') {
			echo $xml->spieldaten[0]->spiel4[0]->sb;
		} else if ($daten == 'satz1') {
			echo $xml->spieldaten[0]->spiel4[0]->satz1;
		} else if ($daten == 'satz2') {
			echo $xml->spieldaten[0]->spiel4[0]->satz2;
		} else if ($daten == 'satz3') {
			echo $xml->spieldaten[0]->spiel4[0]->satz3;
		} else if ($daten == 'satz4') {
			echo $xml->spieldaten[0]->spiel4[0]->satz4;
		} else if ($daten == 'satz5') {
			echo $xml->spieldaten[0]->spiel4[0]->satz5;
		} else if ($daten == 'gesamt') {
			echo $xml->spieldaten[0]->spiel4[0]->gesamt;
		}
	} else if ($spiel == 5) {
		if ($daten == 'sa') {
			echo $xml->spieldaten[0]->spiel5[0]->sa;
		} else if ($daten == 'sb') {
			echo $xml->spieldaten[0]->spiel5[0]->sb;
		} else if ($daten == 'satz1') {
			echo $xml->spieldaten[0]->spiel5[0]->satz1;
		} else if ($daten == 'satz2') {
			echo $xml->spieldaten[0]->spiel5[0]->satz2;
		} else if ($daten == 'satz3') {
			echo $xml->spieldaten[0]->spiel5[0]->satz3;
		} else if ($daten == 'satz4') {
			echo $xml->spieldaten[0]->spiel5[0]->satz4;
		} else if ($daten == 'satz5') {
			echo $xml->spieldaten[0]->spiel5[0]->satz5;
		} else if ($daten == 'gesamt') {
			echo $xml->spieldaten[0]->spiel5[0]->gesamt;
		}
	} else if ($spiel == 6) {
		if ($daten == 'sa') {
			echo $xml->spieldaten[0]->spiel6[0]->sa;
		} else if ($daten == 'sb') {
			echo $xml->spieldaten[0]->spiel6[0]->sb;
		} else if ($daten == 'satz1') {
			echo $xml->spieldaten[0]->spiel6[0]->satz1;
		} else if ($daten == 'satz2') {
			echo $xml->spieldaten[0]->spiel6[0]->satz2;
		} else if ($daten == 'satz3') {
			echo $xml->spieldaten[0]->spiel6[0]->satz3;
		} else if ($daten == 'satz4') {
			echo $xml->spieldaten[0]->spiel6[0]->satz4;
		} else if ($daten == 'satz5') {
			echo $xml->spieldaten[0]->spiel6[0]->satz5;
		} else if ($daten == 'gesamt') {
			echo $xml->spieldaten[0]->spiel6[0]->gesamt;
		}
	}
?>