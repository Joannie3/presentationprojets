<?php

include 'assets/includes/header.php';
include 'assets/includes/navbar.php';

?>

<div class="container">
 

    <div class="inscription">

        <div class="titre1">Connexion</div>

        <div class="affichemessageinscription"></div>

        <form method="POST" action="traitement_connexion.php">

            <div class="ligne1">
                <div class="gaucheinscription">E-mail : </div>
                <div class="droiteinscription"> <input type="mail" placeholder="Votre adresse mail" id="mail" name="mail"></div>
            </div>

            <div class="ligne1">
                <div class="gaucheinscription">Password : </div>
                <div class="droiteinscription"> <input type="password" id="password" name="password"></div>
            </div>

            <div class="ligne1">
                <input type="submit" value="Je me connecte">
            </div>
        </form>



    </div>

</div>

<?php

include 'assets/includes/footer.php';

?>