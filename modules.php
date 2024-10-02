<?php
include 'first.php';
?>
<div id="allModules">
    <p>
        Vos Modules
    </p>
    <div class="HL"><hr></div>

    <section id="home-module">
        <?php
            require('connexion.php');

            // Récupération de l'ID du professeur connecté (exemple avec ID = 1)
            $idProfesseur = 1;

            // Requête pour récupérer les modules enseignés par le professeur
            $sql = "SELECT id_Module,imageModule, NomModule, preDescription FROM modules WHERE id_prof = $idProfesseur";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die("Erreur de requête : " . mysqli_error($conn));
            }

            // Vérification s'il y a des modules trouvés
            if (mysqli_num_rows($result) > 0) {
                // Affichage de la balise <aside> uniquement s'il y a des modules
                echo '<aside id="containColumn">';
                echo '<div id="top">';

                // Boucle pour afficher les modules
                while ($row = mysqli_fetch_assoc($result)) {
                    $id_Module = $row['id_Module'];
                    $nomModule = $row['NomModule'];
                    $preDescription = $row['preDescription'];
                    $imageModule = $row['imageModule'];

                    // Affichage des informations du module dans l'élément d'id "top"
                    echo "<div class='module'>";
                    echo "<div class='module-info'>";
                    echo "<h3>$nomModule</h3>";
                    echo "<img src='images/$imageModule' alt='Image du module'>";
                    echo "</div>";
                    echo "<p class='preDescription'>$preDescription</p>";
                    echo "<div class='details-link'>";
                    echo "<img src='./images/right-arrow.png' alt='Right Arrow'>";
                    echo "<a class='PDD' href='DescriptionModule.php?id_Module=$id_Module'>Plus de Détails...</a>";
                    echo "</div>";
                    echo "</div>";
                }

                echo '</div>';
                echo '<div id="Bottom"></div>';
                echo '</aside>';
            } else {
                echo "Aucun module trouvé pour ce professeur.";
            }

            // Fermeture de la connexion à la base de données
            mysqli_close($conn);
        ?>
    </section>
</div> 
<aside id="A-racc">
        <p class="special-para">RACCOURCIS</p>
        <hr>
        <div class="allimages">
            <div class="firstT">
                <a href="emploi.php"><img src="./images/deadline.png" alt="Emploi"></a>
                <p class="nameT">Emploi</p>
            </div>
            <div class="firstT">
                <a href="#"><img src="./images/target.png" alt="Modules"></a>
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
    include 'third.php';
?>
