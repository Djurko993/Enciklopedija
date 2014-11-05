<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
if (!isset($_SESSION['k_ime_zp']))
     header("Location: ./Glavna.php");
if (!isset($_SESSION['open']))     // proverava da li javlja greska prilikom unosa opstine i ispisuje poruku na osnovu toga
    $_SESSION['message']="Unesi ime opstine";
if (!isset($_SESSION['open2']))
    $_SESSION['message2']="Unesi ime spomenika";
require('../php/connect.php');
   
?>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="stilovi_strana.css">
		<title>Dodavanje podataka</title>
		<meta charset="utf-8"/>
	</head>
	
	<body>
		<div id="forma_za_dodavanje_opštine">
			<form id="forma_zdo">
				<div id="fzdo_zaglavlje">
					<h1>Dodavanje opštine</h1>
				</div>
				<div id="fzdo_unos">
					<p>Unesite naziv opštine</p>
					<input type="text" id="naziv_opštine" name="naziv_opštine" placeholder="Opština"/> 
				</div>
				<div id="fzdo_dugme">
					<input type="button" class="dugme_fzdo" value="Dodaj"/>
				</div>
			</form>
		</div>
		<div id="forma_za_dodavanje_tipa">
			<form id="forma_zdt">
				<div id="fzdt_zaglavlje">
					<h1>Dodavanje tipa</h1>
				</div>
				<div id="fzdt_unos">
					<p>Unesite tip</p>
					<input type="text" id="fzdt_tip" name="fzdt_tip" placeholder="Tip"/> 
				</div>
				<div id="fzdt_dugme">
					<input type="button" class="dugme_fzdt" value="Dodaj"/>
				</div>
			</form>
		</div>
	</body>
	
</html>