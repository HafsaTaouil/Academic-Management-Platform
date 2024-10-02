<?php
    
    
    // Connexion à la base de données
    $conn = new mysqli("localhost", "root", "", "eservice");
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }else{
        if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pw = $_POST['password'];

        // Exécutez la requête SQL
        $requete = "SELECT * FROM authentification WHERE nom_utilisateur = $user ";
        $result = $conn->query($requete);


        if($result){
            $row=$result->fetch_assoc();
            $id_professeur=$row['id_prof'];
            $requete2 = "select * from professeur where id_prof = $id_professeur";

            $result2 = $conn->query($requete2);
            if($result2){
                $row2=$result2->fetch_assoc();
                $nom_prof=$row2['nom'];
                $prenom_prof=$row2['prenom'];
                $sexe_prof=$row2['sexe'];
                $_SESSION['NomProf']=$nom_prof;
                $_SESSION['PrenomProf']=$prenom_prof;
                $_SESSION['SexeProf']=$sexe_prof;
                if(isset($_POST['submit'])){
                    header('location: index.php');
                    exit();
                }

            }else{
                echo "pb avec requete 2";
            }
            echo "requete effectuée avec succès et user trouvé!";
        }
        else{
            echo "Non trouvé jjj !";
        }

    }
}



?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <!-- ... Vos autres liens de styles ... -->
</head>
<body>
    <!-- ... Votre contenu HTML ... -->
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <!---->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=MuseoModerno:wght@100&family=Tsukimi+Rounded:wght@300&display=swap" rel="stylesheet">
    <!---->

    <!--3 following links for the beautiful font-family : MuseoModerno whiche the pro
    perty is :
        font-family: 'MuseoModerno', cursive;
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@100&display=swap" rel="stylesheet">
    <!---->

</head>
<body>
    <section id="home-login">
        <div class="LEFT">
        </div>

        <div class="RIGHT">
            <!-- FORMULAIRE D'AUTHENTIFICATION -->
            <p class="TITRE">
                Plateforme EduConnect
            </p>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="username" id="username" placeholder="Nom d'utilisateur.." required value="<?php if (isset($_POST['username'])) echo $_POST['username'];?>">
                <br><br>
                <input type="password" name="password" placeholder="Mot de passe.." required>
                <br><br>
                <input type="checkbox" name="R" value="" id="R"><p class="RM">Sauvegarder les informations de login.</p>
                <br><br>
                <input type="submit" name="submit" value="Se Connecter" id="connect">
                <br><br>
            </form>            
        </div>
    </section>
</body>
</html>
