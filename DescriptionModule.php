<?php
    include 'first.php';

    // Vérification de la présence de l'ID du module dans l'URL
    if (isset($_GET['id_Module'])) {
        // Récupération de l'ID du module à partir de l'URL
        $id_Module = $_GET['id_Module'];

        require('connexion.php');

        // Requête pour récupérer les informations du module
        $sql = "SELECT NomModule, ChargeHoraire, DescModule, NiveauEtd, ObjetApprentissage
                FROM modules
                WHERE id_Module = $id_Module ";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Erreur de requête : " . mysqli_error($conn));
        }

        // Vérification s'il y a des informations trouvées pour le module
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $nomModule = $row['NomModule'];
            $chargeHoraire = $row['ChargeHoraire'];
            $descModule = $row['DescModule'];
            $niveauEtudes = $row['NiveauEtd'];
            $objectifsApprentissage = $row['ObjetApprentissage'];

            echo '<section id="info-Module">';

            echo '<div class="nameMod">';
            echo '<p>Nom De Module</p>';
            echo '<div class="HL"><hr></div>';
            echo '<div class="talk">' . $row['NomModule'] . '</div>';
            echo '</div>';

            echo '<div class="heuresMod">';
            echo '<p>Nombre d\'heures De Cours</p>';
            echo '<div class="HL"><hr></div>';
            echo '<div class="talk">' . $chargeHoraire . '</div>';
            echo '</div>';

            echo '<div class="descMod">';
            echo '<p>Description De Module</p>';
            echo '<div class="HL"><hr></div>';
            echo '<div class="talk">' . $descModule . '</div>';
            echo '</div>';

            echo '<div class="nivMod">';
            echo '<p>Niveau D\'études</p>';
            echo '<div class="HL"><hr></div>';
            echo '<div class="talk">' . $niveauEtudes . '</div>';
            echo '</div>';

            echo '<div class="objMod">';
            echo '<p>Objectifs D\'apprentissage</p>';
            echo '<div class="HL"><hr></div>';
            echo '<div class="talk">' . $objectifsApprentissage . '</div>';
            echo '</div>';

            echo '</section>';
        } else {
            echo 'Aucune information trouvée pour ce module.';
        }

        // Fermeture de la connexion à la base de données
        mysqli_close($conn);
    } else {
        echo 'Aucun ID de module spécifié.';
    }

    ?>
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
    include 'third.php';
?>
