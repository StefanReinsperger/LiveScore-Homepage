<?php

	if (file_exists('api/livescore.xml')) {
		$xml = simplexml_load_file('api/livescore.xml');
	}
	
	
	$mannschafta = $_GET['mannschafta'];
	$mannschaftb = $_GET['mannschaftb'];
	$logoa = $_GET['logoa'];
	$logob = $_GET['logob'];
	$standa = $_GET['standa'];
	$standb = $_GET['standb'];
	$spieler1 = $_GET['spieler1'];
	$spieler2 = $_GET['spieler2'];
	$spieler3 = $_GET['spieler3'];
	$spieler4 = $_GET['spieler4'];
	$saetzea = $_GET['saetzea'];
	$saetzeb = $_GET['saetzeb'];
	$punktea = $_GET['punktea'];
	$punkteb = $_GET['punkteb'];
	$doppel = $_GET['doppel'];
	$timea = $_GET['timea'];
	$timeb = $_GET['timeb'];
	$kartea = $_GET['kartea'];
	$karteb = $_GET['karteb'];

	$sa1 = $_GET['sa1'];
	$sa2 = $_GET['sa2'];
	$sa3 = $_GET['sa3'];
	$sb1 = $_GET['sb1'];
	$sb2 = $_GET['sb2'];
	$sb3 = $_GET['sb3'];
	$doppela = $_GET['doppela'];
	$doppelb = $_GET['doppelb'];

	$sp1 = $_GET['sp1'];
	$sp11 = $_GET['sp11'];
	$sp12 = $_GET['sp12'];
	$sp13 = $_GET['sp13'];
	$sp14 = $_GET['sp14'];
	$sp15 = $_GET['sp15'];
	$sp2 = $_GET['sp2'];
	$sp21 = $_GET['sp21'];
	$sp22 = $_GET['sp22'];
	$sp23 = $_GET['sp23'];
	$sp24 = $_GET['sp24'];
	$sp25 = $_GET['sp25'];
	$sp3 = $_GET['sp3'];
	$sp31 = $_GET['sp31'];
	$sp32 = $_GET['sp32'];
	$sp33 = $_GET['sp33'];
	$sp34 = $_GET['sp34'];
	$sp35 = $_GET['sp35'];
	$sp4 = $_GET['sp4'];
	$sp41 = $_GET['sp41'];
	$sp42 = $_GET['sp42'];
	$sp43 = $_GET['sp43'];
	$sp44 = $_GET['sp44'];
	$sp45 = $_GET['sp45'];
	$sp5 = $_GET['sp5'];
	$sp51 = $_GET['sp51'];
	$sp52 = $_GET['sp52'];
	$sp53 = $_GET['sp53'];
	$sp54 = $_GET['sp54'];
	$sp55 = $_GET['sp55'];
	$sp6 = $_GET['sp6'];
	$sp61 = $_GET['sp61'];
	$sp62 = $_GET['sp62'];
	$sp63 = $_GET['sp63'];
	$sp64 = $_GET['sp64'];
	$sp65 = $_GET['sp65'];	
	
	if ($mannschafta != '') {
		$xml->mannschaft[0]->a = $mannschafta;
	}
	if ($mannschaftb != '') {
		$xml->mannschaft[0]->b = $mannschaftb;
	}
	
	if ($logoa != '') {
		$xml->logo[0]->a = $logoa;
	}
	if ($logob != '') {
		$xml->logo[0]->b = $logob;
	}
	
	if ($standa != '') {
		$xml->stand[0]->a = $standa;
	}
	if ($standb != '') {
		$xml->stand[0]->b = $standb;
	}
	
	if ($saetzea != '') {
		$xml->aktuell[0]->saetze[0]->a = $saetzea;
	}
	if ($saetzeb != '') {
		$xml->aktuell[0]->saetze[0]->b = $saetzeb;
	}
	
	if ($punktea != '') {
		$xml->aktuell[0]->punkte[0]->a = $punktea;
	}
	if ($punkteb != '') {
		$xml->aktuell[0]->punkte[0]->b = $punkteb;
	}
	
	if ($spieler1 != '') {
		$xml->aktuell[0]->spieler[0]->s1 = $spieler1;
	}
	if ($spieler2 != '') {
		$xml->aktuell[0]->spieler[0]->s2 = $spieler2;
	}
	if ($spieler3 != '') {
		$xml->aktuell[0]->spieler[0]->s3 = $spieler3;
	}
	if ($spieler4 != '') {
		$xml->aktuell[0]->spieler[0]->s4 = $spieler4;
	}
	
	if ($doppel == 'false') {
		$xml->aktuell[0]->spieler[0]->s3 = '';
		$xml->aktuell[0]->spieler[0]->s4 = '';
	}
	
	if ($timea != '') {
		$xml->aktuell[0]->timeout[0]->a = $timea;
	}
	
	if ($timeb != '') {
		$xml->aktuell[0]->timeout[0]->b = $timeb;
	}
	
	if ($kartea != '') {
		$xml->aktuell[0]->karten[0]->a = $kartea;
	}
	
	if ($karteb != '') {
		$xml->aktuell[0]->karten[0]->b = $karteb;
	}

	

	if ($sa1 != '') {
		$xml->spieldaten[0]->spiel1[0]->sa = $sa1;
		$xml->spieldaten[0]->spiel5[0]->sa = $sa1;
	}

	if ($sa2 != '') {
		$xml->spieldaten[0]->spiel2[0]->sa = $sa2;
		$xml->spieldaten[0]->spiel6[0]->sa = $sa2;
	}

	if ($sa3 != '') {
		$xml->spieldaten[0]->spiel3[0]->sa = $sa3;
	}

	if ($doppela != '') {
		$xml->spieldaten[0]->spiel4[0]->sa = $doppela;
	}

	if ($sb1 != '') {
		$xml->spieldaten[0]->spiel1[0]->sb = $sb1;
		$xml->spieldaten[0]->spiel6[0]->sb = $sb1;
	}

	if ($sb2 != '') {
		$xml->spieldaten[0]->spiel2[0]->sb = $sb2;
		$xml->spieldaten[0]->spiel5[0]->sb = $sb2;
	}

	if ($sb3 != '') {
		$xml->spieldaten[0]->spiel3[0]->sb = $sb3;
	}

	if ($doppelb != '') {
		$xml->spieldaten[0]->spiel4[0]->sb = $doppelb;
	}



	if ($sp1 != '') {
		$xml->spieldaten[0]->spiel1[0]->gesamt = $sp1;
	}

	if ($sp2 != '') {
		$xml->spieldaten[0]->spiel2[0]->gesamt = $sp2;
	}

	if ($sp3 != '') {
		$xml->spieldaten[0]->spiel3[0]->gesamt = $sp3;
	}

	if ($sp4 != '') {
		$xml->spieldaten[0]->spiel4[0]->gesamt = $sp4;
	}

	if ($sp5 != '') {
		$xml->spieldaten[0]->spiel5[0]->gesamt = $sp5;
	}

	if ($sp6 != '') {
		$xml->spieldaten[0]->spiel6[0]->gesamt = $sp6;
	}
	
	
	if ($sp11 != '') {
		$xml->spieldaten[0]->spiel1[0]->satz1 = $sp11;
	}

	if ($sp12 != '') {
		$xml->spieldaten[0]->spiel1[0]->satz2 = $sp12;
	}

	if ($sp13 != '') {
		$xml->spieldaten[0]->spiel1[0]->satz3 = $sp13;
	}

	if ($sp14 != '') {
		$xml->spieldaten[0]->spiel1[0]->satz4 = $sp14;
	}

	if ($sp15 != '') {
		$xml->spieldaten[0]->spiel1[0]->satz5 = $sp15;
	}

	if ($sp21 != '') {
		$xml->spieldaten[0]->spiel2[0]->satz1 = $sp21;
	}

	if ($sp22 != '') {
		$xml->spieldaten[0]->spiel2[0]->satz2 = $sp22;
	}

	if ($sp23 != '') {
		$xml->spieldaten[0]->spiel2[0]->satz3 = $sp23;
	}

	if ($sp24 != '') {
		$xml->spieldaten[0]->spiel2[0]->satz4 = $sp24;
	}

	if ($sp25 != '') {
		$xml->spieldaten[0]->spiel2[0]->satz5 = $sp25;
	}

	if ($sp31 != '') {
		$xml->spieldaten[0]->spiel3[0]->satz1 = $sp31;
	}

	if ($sp32 != '') {
		$xml->spieldaten[0]->spiel3[0]->satz2 = $sp32;
	}

	if ($sp33 != '') {
		$xml->spieldaten[0]->spiel3[0]->satz3 = $sp33;
	}

	if ($sp34 != '') {
		$xml->spieldaten[0]->spiel3[0]->satz4 = $sp34;
	}

	if ($sp35 != '') {
		$xml->spieldaten[0]->spiel3[0]->satz5 = $sp35;
	}

	if ($sp41 != '') {
		$xml->spieldaten[0]->spiel4[0]->satz1 = $sp41;
	}

	if ($sp42 != '') {
		$xml->spieldaten[0]->spiel4[0]->satz2 = $sp42;
	}

	if ($sp43 != '') {
		$xml->spieldaten[0]->spiel4[0]->satz3 = $sp43;
	}

	if ($sp44 != '') {
		$xml->spieldaten[0]->spiel4[0]->satz4 = $sp44;
	}

	if ($sp45 != '') {
		$xml->spieldaten[0]->spiel4[0]->satz5 = $sp45;
	}

	if ($sp51 != '') {
		$xml->spieldaten[0]->spiel5[0]->satz1 = $sp51;
	}

	if ($sp52 != '') {
		$xml->spieldaten[0]->spiel5[0]->satz2 = $sp52;
	}

	if ($sp53 != '') {
		$xml->spieldaten[0]->spiel5[0]->satz3 = $sp53;
	}

	if ($sp54 != '') {
		$xml->spieldaten[0]->spiel5[0]->satz4 = $sp54;
	}

	if ($sp55 != '') {
		$xml->spieldaten[0]->spiel5[0]->satz5 = $sp55;
	}

	if ($sp61 != '') {
		$xml->spieldaten[0]->spiel6[0]->satz1 = $sp61;
	}

	if ($sp62 != '') {
		$xml->spieldaten[0]->spiel6[0]->satz2 = $sp62;
	}

	if ($sp63 != '') {
		$xml->spieldaten[0]->spiel6[0]->satz3 = $sp63;
	}

	if ($sp64 != '') {
		$xml->spieldaten[0]->spiel6[0]->satz4 = $sp64;
	}

	if ($sp65 != '') {
		$xml->spieldaten[0]->spiel6[0]->satz5 = $sp65;
	}	
	
	$xml->asXML('api/livescore.xml');

?>