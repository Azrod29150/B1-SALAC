	<?php 
	require "include/header.php"; 
	$residence = $_GET['res'];
	require_once("bdd/connect.php"); 
		$req = $db->query("SELECT * FROM T_Residences WHERE NomResidence='$residence';");
		$nb_resultats = $req->rowCount();
        if ($nb_resultats != 0) {
            $infos = $req->fetch();
            $ascenseur = ($infos->AscenseurResidence)? "Yes" : "No";
            $parking = ($infos->ParkingResidence)? "Yes" : "No"; ?>
	<div class="row">
		<h2>Résidence "<?php echo $infos->NomResidence; ?>"</h2>
		<div class="col">
			<div class="card">
				<img src="Photos/<?php echo rawurlencode($infos->NomResidence); ?>/<?php echo rawurlencode($infos->NomResidence); ?>-Vue.jpg"
					class="card-img-top img-fluid">
				<div class="card-body"><?php echo $infos->RueResidence; ?> <br> <?php echo $infos->CPResidence; ?>
					<?php echo $infos->VilleResidence; ?></div>
			</div>
		</div>
		<div class="col-md-auto">
			<div class="card">
				<table class="table table-border">
					<tr class="tr_Titre_commodites">
						<td colspan="2">Commodités</td>
					</tr>

					<tr class="tr_commodites">
						<td>Ascenseur :</td>
						<td><img src="Photos/<?php echo $ascenseur; ?>.png"></td>
					</tr>

					<tr class="tr_commodites">
						<td>Parking :</td>
						<td><img src="Photos/<?php echo $parking; ?>.png"></td>
					</tr>

					<tr class="tr_commodites">
						<td>Classification :</td>
						<td>

							<?php 
			for ($i=0; $i< $infos->StandingResidence; $i++ ) {
				if(($i+1)<=5){echo '<img src="Photos/Star.png">';} // On limite le nombre d'étoile a 5
			} 
			?>

						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<?php
        } ?>
	<?php require "include/footer.php"; ?>