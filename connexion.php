<?php

	$conn = mysqli_connect("localhost", "root", "", "eservice");
            if (!$conn) {
                die("Erreur de connexion à la base de données : " . mysqli_connect_error());
            }

?>