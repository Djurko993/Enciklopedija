<?php 
header('Content-Type: text/html; charset=utf-8');

require('../php/connect.php');
?>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="stilovi_strana.css"/>
		<meta charset="utf-8"/>		
		<script type="text/javascript" src="galerija_glavne_strane.js"></script>
	</head>
	
	<body>
		<div id="zaglavlje">
			<div id="traka_sa_sličicama">
				<div id="sličica_zaglavlja"><a href="#"><img src="Slike/Traka u zaglavlju/facebook.png" title="Naša facebook strana!"/></a></div>
				<div id="sličica_zaglavlja"><a href="#"><img src="Slike/Traka u zaglavlju/twitter.png" title="Naš twitter nalog!"/></a></div>
				<div id="sličica_zaglavlja"><a href="#"><img src="Slike/Traka u zaglavlju/youtube.png" title="Naš youtube kanal!"/></a></div>
				<div id="sličica_zaglavlja"><a href="#"><img src="Slike/Traka u zaglavlju/google.png" title="Naš google+ nalog!"/></a></div>
			</div>
			<div id="slika_zaglavlja">
				<img src="Slike/Zaglavlje.png"/>
			</div>
			<div id="meni">
				<a href="Glavna.php" style="text-decoration:none;"><div id="trenutno_odabrano"><h1>POČETNA</h1></div></a>
				<a href="Pretraga.php" style="text-decoration:none;"><div id="neodabrano"><h1>PRETRAGA</h1></div></a>
				<a href="Kontakt.php" style="text-decoration:none;"><div id="neodabrano"><h1>KONTAKT</h1></div></a>
				<a href="O nama.php" style="text-decoration:none;"><div id="neodabrano"><h1>O NAMA</h1></div></a>
			</div>
		</div>		
		<div id="glavni_sadržaj">
			<div id="galerija_slika">
				<img src="Slike/Galerija glavne strane/1.jpg" id="glavna_slika_galerije"/>
				<div id="levo"><img onClick="javascript:kreni(-1)" src="Slike/Galerija glavne strane/left.png"/></div>
				<div id="desno"><img onClick="javascript:kreni(1)" src="Slike/Galerija glavne strane/right.png"/></div>
				<div id="pokreni"><img onClick="javascript:pokreni_slike();proveri()" src="Slike/Galerija glavne strane/play.png"/></div>
				<div id="pauziraj"><img onClick="javascript:zaustavi_slike()" src="Slike/Galerija glavne strane/pause.png"/></div>
			</div>
			<div id="traka_sa_strane">
				<div id="forma_za_brzu_pretragu">										<!--zbp = za brzu pretragu-->
					<div id="zaglavlje_forme_zbp"><h1>BRZA PRETRAGA</h1></div>
					<div id="okrug_zbp">
						<h1>OPŠTINA</h1>
						<select name="opština">
							<option value="palilula">Palilula</option>
						</select>
					</div>
					<div id="tip_zbp">
						<h1>TIP</h1>
						<select name="tip">
							<option value="manastir">Manastir</option>
							<option value="arh_nalazište">Ar. nalazište</option>
						</select>
					</div>
					<div id="dugme_zbp">
						<input type="button" class="dugme_zbp" value="Potraži"/>
					</div>
				</div>
				<form id="forma_za_prijavu" method="post" action="../php/checklogin.php">												<!--zp = za prijavu-->
					<div id="zaglavlje_forme_zp"><h1>PRIJAVA</h1></div>
					<div id="korisnik_zp">
						<h1>Korisničko ime</h1>
						<input type="text" name="k_ime_zp"  id="k_ime_zp" placeholder="Korisnik"/>
					</div>
					<div id="lozinka_zp">
						<h1>Lozinka</h1>
						<input type="password" name="lozinka_zp" id="lozinka_zp" placeholder="Lozinka"/>
					</div>
					<div id="dugme_zp">
						<input type="submit" class="dugme_zp" value="Prijavi me" />
					</div>
				</form>
			</div>
		</div>
	</body>

</html>