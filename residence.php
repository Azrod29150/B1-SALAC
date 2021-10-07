<pre>
<?php

	$sql = "
		SELECT NumResidence AS num, Nomresidence AS nom, RueResidence AS rue, CPResidence AS cp, VilleResidence AS ville,
				UrlPhotoResidence AS url, Ascenseuresidence AS ascenseur,	ParkingResidence AS parking, StandingResidence 
		FROM salac_intra
		WHERE NumResidence = $numero;
	";

	$reponse=$bdd->query($sql);
	$infos = $reponse->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Résidence "Coulomb"</title>	
	<META http-equiv="Content-Type" content="text/html; charset=utf-8">
	<LINK REL="Stylesheet" HREF ="assets/css/FichierDeStyle.css" TYPE="text/css" />
</head>
<body>

<div class="PartieCentrale">
	<h1> "SA LAC" : <span class="lettresRouges">L</span>ouez 
				votre <span class="lettresRouges">A</span>ppartement 
				ou votre <span class="lettresRouges">C</span>hambre ! </h1> 
	<img class="imgLogo" src="Photos/Logo.jpg">
	<hr>
	<table>
		<tr>			
			<th colspan="4"> Résidence "Fresnel"</th>
		</tr>
		<tr>
			<td><img src="Photos/Fresnel/Fresnel-Vue.jpg"></td>
			<td>Rue des sternes <br> 29000 QUIMPER</td>
		</tr>
		<tr class="tr_Titre_commodites">
			<td colspan="2">Commodités</td>
		</tr>
		<tr class="tr_commodites">
			<td>Ascenseur :</td>
			<td><img src="Photos/Yes.png"></td>
		</tr>
		<tr class="tr_commodites">
			<td>Parking :</td>
			<td><img src="Photos/No.png"></td>
		</tr>
		<tr class="tr_commodites">
			<td>Classification :</td>
			<td>
				<img src="Photos/Star.png">
				<img src="Photos/Star.png">
				<img src="Photos/Star.png">
			</td>
		</tr>		
	</table>
</div>

</body>
</html>
