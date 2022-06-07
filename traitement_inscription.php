 <?php

require_once 'assets/includes/config.php';

$message = "";

if (isset($_POST['mail'], $_POST['nom'], $_POST['prenom'], $_POST['password']) && !empty($_POST['mail']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password']))
{

    date_default_timezone_set('Europe/Paris');
    $date = date('Y-m-d H:i:s');

    if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))
    {
        $message .= "<div class='negatif'>Merci de rentrer un e-mail correct</div>";
    }
    else
    {

        $pass = password_hash($_POST["password"], PASSWORD_ARGON2ID);

        $sqlajout = "INSERT INTO `utilisateurs` (`mail_utilisateurs`, `nom_utilisateurs`,`prenom_utilisateurs`, `password_utilisateurs`, `inscription_utilisateurs`) 
        VALUES (:mail_utilisateurs, :nom_utilisateurs, :prenom_utilisateurs, :password_utilisateurs, :inscription_utilisateurs)";
        $requeteajout = $db->prepare($sqlajout);
        $requeteajout->execute(
            array(
                ":mail_utilisateurs" =>$_POST['mail'],
                ":nom_utilisateurs" => $_POST['nom'],
                ":prenom_utilisateurs" => $_POST['prenom'],            
                ":password_utilisateurs" => $pass,
                ":inscription_utilisateurs" => $date
        ));

        $message .= "Votre inscription est prise en compte vous pouvez vous connecter";

    }   



}
else {
    $message .= "Merci de remplir tous les champs";
}


echo json_encode(array( 
    "message" => $message
));

?>