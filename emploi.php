<?php
    include'first.php';
?>
<article id="home-emploi">
        <div id="first-div">
            <p>Voici votre Emploi De Temps actuel</p>
        </div>
        <section id="cadre-emploi">
            <div id="getEmploi">


                <!--Script php pour get l'emploi correspondant au prodesseur connecté-->


                


                <button type="button" class="btn btn-success">Télécharger</button>
            </div>
        </section>
            
</article>

<aside id="aside-emploi">
    <p>RACCOURCIS</p>
    <div class="allimages">
        <div class="blocEmploi">
            <a href="#"><img src="./images/deadline.png" alt="Emploi"></a>
            <p>Emploi</p>
        </div>

        <div class="blocModules">
            <a href="modules.php"><img src="./images/target.png" alt="Modules"></a>
            <p>Modules</p>
        </div>

        <div class="blocEtudiants">
            <a href="etudiants.php"><img src="./images/graduated.png" alt="Etudiants"></a>
            <p>Etudiants</p>
        </div>

        <div class="blocNotes">
            <a href="notes.php"><img src="./images/checklist.png" alt="Notes"></a>
            <p>Notes</p>
        </div>

        <div class="blocAbscence">
            <a href="absence.php"><img src="./images/consensus.png" alt="Abscence"></a>
            <p>Abscence</p>
        </div>
        
    </div>
</aside>


<?php 
        include './OTHERS/footer.php';
        include'third.php' ;
    ?>