<?php
// ici on demarre la session PHP
session_start();

include 'assets/includes/header.php';
include 'assets/includes/navbar.php';
require_once 'assets/includes/config.php';



if (!empty($_POST)) {

    // il faut le mail et pass soit present tt les deux
    if (isset($_POST["mail"], $_POST["password"]) && !empty($_POST["mail"]) && !empty($_POST["password"])) 
    {

        $sql = "SELECT * FROM utilisateurs WHERE mail_utilisateurs=:mail";
        $query = $db->prepare($sql);
        $query->execute(array(
            ":mail" => $_POST["mail"]
        ));
        $membres = $query->fetch();

        if (!$membres) { 
                echo "<div class='negatif'>Désolé cette adresse e-mail n'existe pas</div>";                
        }
        else {
            // ici on continue si l'adresse mail existe
            if (!password_verify($_POST["password"], $membres["password_utilisateurs"])) {
                echo "<div class='negatif'>Désolé le mot de pass n'est pas valide.</div>";

                echo "<div class='redirectionco'><a href='connexion.php'>Me connecter</a></div>";
            }
            else {

                $_SESSION["membres"] = [
                    "id" => $membres["id_utilisateurs"]
                ];                         

                echo "Vous êtes maintenant connecté<br><br>";

                ?>
                    <meta http-equiv="refresh" content="2; url=index.php"> Vous allez être redirigé
                    
                <?php
            }
        }

    }
    else {
        echo "<div class='negatif'>Veuillez remplir tous les champs</div>";

        echo "<div class='redirectionco'><a href='connexion.php'>Me connecter</a></div>";
    }

}
?>

