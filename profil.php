<?php include 'first.php'; ?>

<section id="menu-nav-bar">
	<nav id="nav-bar">
		<div class="burger" onclick="toggleMenu()">
			<span id="burger-icon"></span>
		</div>
		<script src="profil.js"></script>
	</nav>
	
	<div id="menu-content">
		<div class="allimagesP">
			<div class="firstTP">
				<a href="emploi.php"><img src="./images/deadline.png" alt="Emploi"></a>
				<p class="nameTp" id="emploip">Emploi</p>
			</div>
			<div class="firstTP">
				<a href="modules.php"><img src="./images/target.png" alt="Modules"></a>
				<p class="mod">Modules</p>
			</div>
			<div class="firstTP">
				<a href="etudiants.php"><img src="./images/graduated.png" alt="Etudiants"></a>
				<p class="etd">Etudiants</p>
			</div>
			<div class="firstTP">
				<a href="notes.php"><img src="./images/checklist.png" alt="Notes"></a>
				<p class="nameTp" id="notesp">Notes</p>
			</div>
			<div class="firstTP">
				<a href="absence.php"><img src="./images/consensus.png" alt="Abscence"></a>
				<p class="abs">Abscence</p>
			</div>
		</div>
	</div> <!--Fin MENU CONTENT-->


<div id="info-prof">


	

  <?php
    $connexion = mysqli_connect("localhost", "root", "", "eservice");
    $idProfesseurConnecte = 2;
    // Vérifier si le professeur est connecté (vous devez définir la variable $idProfesseurConnecte avec l'ID du professeur connecté)
    if (isset($idProfesseurConnecte)) {
      // Requête pour récupérer les informations du professeur connecté depuis la table professeur
      $query = "SELECT id_prof, profil_prof, nom, prenom, email, adresse, tel, sexe, departement, specialite FROM professeur WHERE id_prof = $idProfesseurConnecte";
      $result = mysqli_query($connexion, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<p class="nom"><strong>Nom :</strong> ' . $row['nom'] . '</p>';
          echo '<p class="prenom"><strong>Prénom :</strong> ' . $row['prenom'] . '</p>';
          echo '<p class="email"><strong>Email :</strong> ' . $row['email'] . '</p>';
          echo '<p class="adr"><strong>Adresse :</strong> ' . $row['adresse'] . '</p>';
          echo '<p class="tel"><strong>Téléphone :</strong> ' . $row['tel'] . '</p>';
          echo '<p class="sexe"><strong>Sexe :</strong> ' . $row['sexe'] . '</p>';
          echo '<p class="dep"><strong>Département :</strong> ' . $row['departement'] . '</p>';
          echo '<p class="spe"><strong>Spécialité :</strong> ' . $row['specialite'] . '</p>';
        }
      } else {
        echo 'Aucun professeur trouvé.';
      }
    } else {
      echo 'Aucun professeur connecté.';
    }
  ?>
  <p id="IdProf">
	IDENTIFICATION DE PROFESSEUR
</p>
</div>




</section>


<?php 
		include './OTHERS/footer.php';
		include'third.php' ;
	?>