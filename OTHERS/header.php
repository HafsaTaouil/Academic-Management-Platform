<header>
    <div class="logo">
        <a href="#"><img src="./images/logo.png" alt="Logo_ENSAH"></a>
    </div>
    <div class="welcoming">
        <?php
            //Controle de salutation par date.
            $matin = "00:00:00";
            $apres_midi = "14:00:00";
            $heure_actuelle = date("H:i:s");
            if ($heure_actuelle >= $matin && $heure_actuelle < $apres_midi) {
                echo "<p style='font-family: MuseoModerno; color: white ; font-weight:bold; letter-spacing:15.4px'>BONJOUR</p>";
            } else {
                echo "<p style='font-family: MuseoModerno; color: white; font-weight:bold;letter-spacing:15.4px'>BONSOIR</p>";
            }
            $servername = "localhost" ;
            $username = "Hafsa" ;
            $password = "hellogoldenworld11" ;
            $db="WEB" ;
            $cnx=mysqli_connect($servername , $username , $password , $db);
            if(!$cnx) 
                die("Connection failed !!");
            else
            $requete = "Select nom_complet from professeur" ;
            $result = mysqli_query($cnx,$requete);
            $row = mysqli_fetch_assoc($result);
            $nom_complet = $row['nom_complet'];

                echo "<p style='font-family: MuseoModerno; color: white;font-weight:bold; letter-spacing:3px'>".$nom_complet . "</p><br>";

            ?>
    </div>
           
    <nav class="nav-bar">
        <ul class="menu">
            <li class="active">
                <a href="index.php" >Accueil</a>
            </li>
            <li>
                <a href="">Actualités</a>
            </li>
            <li>
                <a href="" >Contacts</a>
            </li>
            <li>
                <a href="profil.php" >Profil</a>
            </li>
        </ul>
    </nav>
</header>
    
    

