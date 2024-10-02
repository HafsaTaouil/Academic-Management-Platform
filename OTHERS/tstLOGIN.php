<?php
    
    session_start();

    define("login","dadi.elwardani@etu.uae.ac.ma");
    define("pw","dadielwardani123");

    if(isset($_POST['submit'])){
        if($_POST['username']==login && $_POST['password']==pw){
            header('location: index.php');
        }
    

    $_SESSION['nom']="Dadi";
    $_SESSION['prenom']="El-Wardani";
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
    <link rel='stylesheet' href='./css/main.css'>
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
                <input type="password" name="password" id="password" placeholder="Mot de passe.." required>
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
