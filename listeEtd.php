<?php
    include 'first.php';
?>

<!--CONTENT-->
<section id="liste-etudiants">
    <p id="titre">
        Liste des Étudiants
    </p>

    <hr class="HL2">

    <div class="table-container">
        <table class="etudiants-table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de Naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require('connexion.php');

                    // Vérification de la présence de l'ID du module dans l'URL
                    if (isset($_GET['id_Module'])) {
                        // Récupération de l'ID du module à partir de l'URL
                        $idModule = $_GET['id_Module'];

                        // Requête pour récupérer la liste des étudiants du module sélectionné
                        $sql = "SELECT e.nom, e.prenom, e.DateNaissance
                                FROM etudiants AS e
                                INNER JOIN inscriptions AS i ON e.idEtudiant = i.idEtudiant
                                WHERE i.id_Module = $idModule";
                        $result = mysqli_query($conn, $sql);

                        if (!$result) {
                            die("Erreur de requête : " . mysqli_error($conn));
                        }

                        // Affichage des étudiants dans la table
                        while ($row = mysqli_fetch_assoc($result)) {
                            $nom = $row['nom'];
                            $prenom = $row['prenom'];
                            $dateNaissance = $row['DateNaissance'];

                            echo "<tr>";
                            echo "<td>$nom</td>";
                            echo "<td>$prenom</td>";
                            echo "<td>$dateNaissance</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Aucun ID de module spécifié.";
                    }

                    // Fermeture de la connexion à la base de données
                    mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</section>

<!--RACCOURCIS BEGIN-->
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
<!--RACCOURCIS END-->

<?php
    include './OTHERS/footer.php';
    include 'third.php';
?>
