<!DOCTYPE html>
<html>
	
	<?php
	
		if (file_exists('api/livescore.xml')) {
			$xml = simplexml_load_file('api/livescore.xml');
		}
	
		function get_user_browser() {
			
			$ub = true;
			if (preg_match('/(?i)msie/',$_SERVER['HTTP_USER_AGENT'])) {
				$ub = false;
			}
			elseif (preg_match('/(?i)rv/',$_SERVER['HTTP_USER_AGENT'])) {
				$ub = false;
			}

			return $ub;
		}
	
	?>

	<head>
		<title>UTTC-Stockerau - Liveticker</title>
		
		<link rel="stylesheet" href="formatierung.css" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>	

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-40325329-4', 'auto');
			ga('send', 'pageview');

		</script>
		
		
		<?php
		
			$browser = get_user_browser();
			
			if ($browser == true) { 
			
				$z = 0;
				do {
					$z++;
					
					echo '<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("api/spieldaten.php?daten=stand&nr=';
					echo $z;
					echo '");
			source.onmessage = function(event) {
				document.getElementById("stand';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo '").innerHTML = event.data;
			};
		}
	</script>';
					
					echo '<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("api/spieldaten.php?daten=spieler&nr=';
					echo $z;
					echo '");
			source.onmessage = function(event) {
				document.getElementById("spielers';
					echo $z;
					echo '").innerHTML = event.data;
			};
		} else {
			document.getElementById("fehler").innerHTML = "Bla";
		}
	</script>';

					echo '<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("api/spieldaten.php?daten=saetze&nr=';
					echo $z;
					echo '");
			source.onmessage = function(event) {
				document.getElementById("saetze';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo '").innerHTML = event.data;
			};
		}
	</script>';
					
					echo '<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("api/spieldaten.php?daten=punkte&nr=';
					echo $z;
					echo '");
			source.onmessage = function(event) {
				document.getElementById("punkte';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo '").innerHTML = event.data;
			};
		}
	</script>';

					echo '<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("api/spieldaten.php?daten=bild&nr=';
					echo $z;
					echo '");
			source.onmessage = function(event) {
				document.getElementById("bild';
					echo $z;
					echo '").innerHTML = event.data;
			};
		}
	</script>';	
			

					
					for ($i = 1; $i <= 6; $i++) {
					
						echo '<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("api/spiele.php?spiel=';
					echo $i;
					echo '&daten=s';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo '");
			source.onmessage = function(event) {
				document.getElementById("s';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo $i;
					echo '").innerHTML = event.data;
			};
		}
	</script>';
					}
					
				} while ($z < 2);
			
			
				for ($i = 1; $i <= 6; $i++) {
					for ($j = 1; $j <= 5; $j++) {
					
					
						echo '<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("api/spiele.php?spiel=';
						echo $i;
						echo '&daten=satz';
						echo $j;
						echo '");
			source.onmessage = function(event) {
				document.getElementById("sp';
						echo $i;
						echo 'satz';
						echo $j;
						echo '").innerHTML = event.data;
			};
		}
	</script>';
					
					}
			
					echo '<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("api/spiele.php?spiel=';
					echo $i;
					echo '&daten=gesamt");
			source.onmessage = function(event) {
				document.getElementById("sp';
					echo $i;
					echo 'gesamt").innerHTML = event.data;
			};
		}
	</script>';
				}
				
			} else {
			
				$z = 0;
				do {
					$z++;
					
					echo '<script type="text/javascript">
			 $(document).ready(function() {
			   $("#stand';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo '").load("api/spieldaten_ie.php?daten=stand&nr=';
					echo $z;
					echo '");
			   var refresh = setInterval(function() {
				  $("#stand';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo '").load("api/spieldaten_ie.php?daten=stand&nr=';
					echo $z;
					echo '");
			   }, 60000);
			});
			</script>';
			
					echo '<script type="text/javascript">
			 $(document).ready(function() {
			   $("#spielers';
					echo $z;
					echo '").load("api/spieldaten_ie.php?daten=spieler&nr=';
					echo $z;
					echo '");
			   var refresh = setInterval(function() {
				  $("#spielers';
					echo $z;
					echo '").load("api/spieldaten_ie.php?daten=spieler&nr=';
					echo $z;
					echo '");
			   }, 60000);
			});
			</script>';
			
					echo '<script type="text/javascript">
			 $(document).ready(function() {
			   $("#saetze';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo '").load("api/spieldaten_ie.php?daten=saetze&nr=';
					echo $z;
					echo '");
			   var refresh = setInterval(function() {
				  $("#saetze';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo '").load("api/spieldaten_ie.php?daten=saetze&nr=';
					echo $z;
					echo '");
			   }, 10000);
			});
			</script>';
			
					echo '<script type="text/javascript">
			 $(document).ready(function() {
			   $("#punkte';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo '").load("api/spieldaten_ie.php?daten=punkte&nr=';
					echo $z;
					echo '");
			   var refresh = setInterval(function() {
				  $("#punkte';
					if ($z == 1) { echo 'a'; } else { echo 'b'; }
					echo '").load("api/spieldaten_ie.php?daten=punkte&nr=';
					echo $z;
					echo '");
			   }, 10000);
			});
			</script>';
			
					echo '<script type="text/javascript">
			 $(document).ready(function() {
			   $("#bild';
					echo $z;
					echo '").load("api/spieldaten_ie.php?daten=bild&nr=';
					echo $z;
					echo '");
			   var refresh = setInterval(function() {
				  $("#bild';
					echo $z;
					echo '").load("api/spieldaten_ie.php?daten=bild&nr=';
					echo $z;
					echo '");
			   }, 60000);
			});
			</script>';
					
					for ($i = 1; $i <= 6; $i++) {
						echo '<script type="text/javascript">
			 $(document).ready(function() {
			   $("#s';
						if ($z == 1) { echo 'a'; } else { echo 'b'; }
						echo $i;
						echo '").load("api/spiele_ie.php?spiel=';
						echo $i;
						echo '&daten=s';
						if ($z == 1) { echo 'a'; } else { echo 'b'; }
						echo '");
			   var refresh = setInterval(function() {
				  $("#s';
						if ($z == 1) { echo 'a'; } else { echo 'b'; }
						echo $i;
						echo '").load("api/spiele_ie.php?spiel=';
						echo $i;
						echo '&daten=s';
						if ($z == 1) { echo 'a'; } else { echo 'b'; }
						echo '");
			   }, 60000);
			});
			</script>';
					}
					
				} while ($z < 2);
			
			
				for ($i = 1; $i <= 6; $i++) {
					for ($j = 1; $j <= 5; $j++) {
						echo '<script type="text/javascript">
			 $(document).ready(function() {
			   $("#sp';
						echo $i;
						echo 'satz';
						echo $j;
						echo '").load("api/spiele_ie.php?spiel=';
						echo $i;
						echo '&daten=satz';
						echo $j;
						echo '");
			   var refresh = setInterval(function() {
				  $("#sp';
						echo $i;
						echo 'satz';
						echo $j;
						echo '").load("api/spiele_ie.php?spiel=';
						echo $i;
						echo '&daten=satz';
						echo $j;
						echo '");
			   }, 60000);
			});
			</script>
			';
					}
			
					echo '<script type="text/javascript">
			 $(document).ready(function() {
			   $("#sp';
					echo $i;
					echo 'gesamt").load("api/spiele_ie.php?spiel=';
					echo $i;
					echo '&daten=gesamt");
			   var refresh = setInterval(function() {
				  $("#sp';
					echo $i;
					echo 'gesamt").load("api/spiele_ie.php?spiel=';
					echo $i;
					echo '&daten=gesamt");
			   }, 60000);
			});
			</script>';
				}
			
			}
		?>
		
		
	</head>
	
	<body>
		<table width="100%" height="100%">
			<tr valign="top">
				<td>
					<table border="0" align="center" class="ueberschrift">
						<tr>
							<td><img src="images/banner_400px.png" />
								<br>1. Herren-Bundesliga - Liveticker</td>
						</tr>
					</table>
					<table border="0" align="center" class="tabelle">
						<tr>
							<td colspan="5">&nbsp;</td>
						</tr>
						<tr>	
							<td class="logo"><img src="http://livescore.uttc-stockerau.at/images/logo/<?php
								echo utf8_decode($xml->logo[0]->a);
							?>.png" /></td>
							<td rowspan="2" class="matches" id="standa" />
							<td rowspan="2" class="text">Matches</td>
							<td rowspan="2" class="matches" id="standb" />
							<td class="logo"><img src="http://livescore.uttc-stockerau.at/images/logo/<?php
								echo utf8_decode($xml->logo[0]->b);
							?>.png" /></td>
						</tr>
						<tr>
							<td align="center" class="mannschaft"><?php
								echo utf8_decode($xml->mannschaft[0]->a);
							?></td>
							<td align="center" class="mannschaft"><?php
								echo utf8_decode($xml->mannschaft[0]->b);
							?></td>
						</tr>
						<tr>
							<td colspan="5">&nbsp;</td>
						</tr>
						<tr>
							<td align="center" valign="center" id="bild1" />
							<td class="saetze" id="saetzea" />
							<td class="text">Sätze</td>
							<td class="saetze" id="saetzeb" />
							<td align="center" valign="center" id="bild2" />
						</tr>
						<tr>
							<td align="center" class="spieler" valign="top" id="spielers1" />
							<td class="punkte" id="punktea" />
							<td class="text">Punkte</td>
							<td class="punkte" id="punkteb" />
							<td align="center" class="spieler" valign="top" id="spielers2" />
						</tr>
					</table>
					<table border="0" class="tabellematches" align="center">
						<tr>
							<td class="tabellespieler"><b><?php
								echo $xml->logo[0]->a;
							?></b></td>
							<td class="tabellespieler"><b><?php
								echo $xml->logo[0]->b;
							?></b></td>
							<?php
								for ($i = 1; $i <= 5; $i++) {
									echo '<td class="tabellesaetze"><b>';
									echo $i;
									echo '.</b></td>';
								}
							?>
							<td class="tabellegesamt"><b>Sätze</b></td>
						</tr>
						<?php
							for ($i = 1; $i <= 6; $i++) {
								echo '<tr>
							<td class="tabellenzelle" id="sa';
								echo $i;
								echo '" />
							<td class="tabellenzelle" id="sb';
								echo $i;
								echo '" />
							<td class="tabellenzelle" id="sp';
								echo $i;
								echo 'satz1" />
							<td class="tabellenzelle" id="sp';
								echo $i;
								echo 'satz2" />
							<td class="tabellenzelle" id="sp';
								echo $i;
								echo 'satz3" />
							<td class="tabellenzelle" id="sp';
								echo $i;
								echo 'satz4" />
							<td class="tabellenzelle" id="sp';
								echo $i;
								echo 'satz5" />
							<td class="tabellenzelle" id="sp';
								echo $i;
								echo 'gesamt" />
						</tr>';
							}
						?>
					</table>
					<table border="0" align="center">
						<tr>
							<td class="fusszeile">LiveScore 1.1.2 - &copy; 2014 Stefan Reinsperger</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>