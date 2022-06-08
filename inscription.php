<?php

include 'assets/includes/header.php';
include 'assets/includes/navbar.php';

?>

<div class="container">
 

    <div class="inscription">

        <div class="titre1">Inscription</div>

        <div class="affichemessageinscription"></div>

        <form method="POST" class="gestioninscription">

            <div class="ligne1">
                <div class="gaucheinscription">E-mail : </div>
                <div class="droiteinscription"> <input type="mail" placeholder="Votre adresse mail" id="mail" name="mail"></div>
            </div>

            <div class="ligne1">
                <div class="gaucheinscription">Nom : </div>
                <div class="droiteinscription"> <input type="text" placeholder="Votre nom" id="nom" name="nom"></div>
            </div>

            <div class="ligne1">
                <div class="gaucheinscription">Prénom : </div>
                <div class="droiteinscription"> <input type="text" placeholder="Votre prénom" id="prenom" name="prenom"></div>
            </div>

            <div class="ligne1">
                <div class="gaucheinscription">Password : </div>
                <div class="droiteinscription"> <input type="password" id="password" name="password"></div>
            </div>

            <div class="ligne1">
                <input type="submit" value="Je valide mon inscription">
            </div>
        </form>



    </div>

</div>

<script src="assets/js/inscription.js"></script>

<?php

include 'assets/includes/footer.php';

?>