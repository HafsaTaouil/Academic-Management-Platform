<?php
	include'first.php';
?>
<div class="VosM">
        <p>
            Saisie D'absence
        </p>
        <div class="HL"><hr></div>
	</div>
	<div class="globally">
		<img class="img-center" src="./images/ensah.jpg">
		<div class="container">
			<form method="" action="">
				<div class="form-group">
					<label for="select_values">Choisir La Classe</label>
					<select class="form-control" id="select_values" name="select_values" required>
						<optgroup label="Cycle Préparatoire Intégré">
							<option value="CP1">Cycle Préparatoire 1</option>
							<option value="CP2">Cycle Préparatoire 2</option>
						</optgroup>
						<optgroup label="Cycle Ingénierie">
							<option value="GI">Génie Informatique</option>
							<option value="GC">Génie Civil</option>
							<option value="GM">Génie Mécanique</option>
							<option value="D">Ingénierie De Données</option>
							<option value="GEE">Génie de l'Eau et de l'Environnement</option>
							<option value="GEER">Génie Energétique et Energie Renouvelable</option>
						</optgroup>
						<option value="---" selected>---</option>
					</select>
				</div>
				<div>
					<label class="labdate" for="date">Le Jour Concerné </label>
					<input type="date" id="date" name="date" required>
				</div>
				<div class="form-group">
					<label for="import_excel">Fichier Excel d'Abscence</label>
					<input type="file" class="form-control-file" id="import_excel" name="import_excel">
				</div>
				
				<button type="submit" class="btn btn-primary" id="envoyerFich">Envoyer</button>
			</form>
		</div>
	</div>

	<!--Raccourcis-->
	<aside id="A-racc">
        <p class="special-para">RACCOURCIS</p>
        <hr>
        <div class="allimages">
            <div class="firstT">
                <a href="emploi.php"><img src="./images/deadline.png" alt="Emploi"></a>
                <p class="nameT">Emploi</p>
            </div>
            <div class="firstT">
                <a href="modules.php"><img src="./images/target.png" alt="Modules"></a>
                <p class="nameT">Modules</p>
            </div>
            <div class="firstT">
                <a href="etudiants.php"><img src="./images/graduated.png" alt="Etudiants"></a>
                <p class="nameT">Etudiants</p>
            </div>
            <div class="firstT">
                <a href="notes.php"><img src="./images/checklist.png" alt="Notes"></a>
                <p class="nameT">Notes</p>
            </div>
            <div class="firstT">
                <a href="absence.php"><img src="./images/consensus.png" alt="Abscence"></a>
                <p class="nameT">Abscence</p>
            </div>
        </div>
    </aside>
	<?php 
		include './OTHERS/footer.php';
		include'third.php' ;
	?>