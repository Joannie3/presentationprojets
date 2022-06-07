<div class="menugeneral">
  
<div class="logogauche">logo</div>

<div class="menudroite">Projet 1 -- Projet 2 -- Projet 3

    <?php
        if (isset($_SESSION["membres"]["id"]))
        {
            echo "<a href='ajouterprojet.php'>Ajouter un projet</a>";

            echo "<a href='deconnexion.php'>Se déconnecter</a>";
        }
        else 
        {

    
    ?>

<a href="inscription.php">Inscription</a> - <a href="connexion.php">Connexion</a>

    <?php
        }
    ?>

</div>

</div>