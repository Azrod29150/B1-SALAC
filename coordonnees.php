	<h2>Coordonnées de la société :</h2>

	<p>SA LAC</p>
	<p>Rue des oliviers</p>
	<p>29200 BREST</p>

	<hr>
	<h2>Informations complémentaires</h2>
	<p>Remplissez le formulaire</p>
	<form id="FormContact"  action="#" method="get">
		<br>
			<fieldset class="FIELD_Coordonnees">
				<legend >Coordonnées : </legend>
					<p>
					<span class="SpanTabulation"> <label for="TEXT_nom">Nom :</label></span>
					<input type="text" name="nom" id="TEXT_nom" />
					<abbr title="obligatoire">*</abbr>
					</p>
					<p>
					<span class="SpanTabulation"> <label for="TEXT_Prenom">Prenom : </label></span>
					 <input type="text" name="prenom" id="TEXT_Prenom" />
					 <abbr title="obligatoire">*</abbr>
					</p>
			</fieldset>
			<br>
			<fieldset class="FIELD_Documentation">
				<legend >Vous désirez de la documentation sur  : </legend>
					<p>
					<span class="SpanTabulationCheck">
					<INPUT type="checkbox" name="doc" id="Doc1" value="1">
					<label for="Doc1">la résidence Ampère</label>
					</span>
					<INPUT type="checkbox" name="doc" id="Doc2" value="2">
					<label for="Doc2">la résidence Fresnel</label>
					</p>
					<p>
					<span class="SpanTabulationCheck">
					<INPUT type="checkbox"  name="doc" id="Doc3" value="3">
					<label for="Doc3">la résidence Coulomb</label>
					</span>
					<INPUT type="checkbox" name="doc" id="Doc4" value="4">
					<label for="Doc4">Nos conditions générales</label>
					</p>
			</fieldset>
			
			
			<br>
			<fieldset class="FIELD_Question">
				<legend > Question en lien avec la résidence : </legend>
				<p>
				  <input type="radio" name="NomResidence" id="RAD_Ampere" value="Ampere" />
				  <label for="RAD_Ampere">Ampere</label>
				
				  <input type="radio" name="NomResidence" id="RAD_Fresnel" value="Fresnel" />
				  <label for="RAD_Fresnel">Fresnel</label>
				  
				  <input type="radio" name="NomResidence" id="RAD_Coulomb" value="Coulomb" />
				  <label for="RAD_Coulomb">Coulomb</label>
				</p>
				<br>
				<textarea id="AREA_Question"  name="question" rows="5" cols="70">Votre question ...</textarea>
				</p>
			</fieldset>
			
			<p> <INPUT NAME="send" TYPE="submit" VALUE="Envoyer" >
				<INPUT NAME="reset" TYPE="reset" VALUE="Effacer">
		</form>