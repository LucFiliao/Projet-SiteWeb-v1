<?php
setcookie('user_data', ''); // supprime les cookies à l'arrivée
require_once('PHP-Fonctions'.DIRECTORY_SEPARATOR.'fonctions.php');

$user_email = null;
$user_password = null;

// affichage dans les champs input si déjà complétés
if(isset($_POST['user-email'])) {
    $user_email = htmlentities($_POST['user-email']);
}
if(isset($_POST['user-password'])) {
    $user_password = htmlentities($_POST['user-password']);
}

if(isset($user_email) && isset($user_password)) {
    if(filter_var($user_email, FILTER_VALIDATE_EMAIL)) { // Si l'email est correcte
        $bd_server = 'localhost';
        $bd_user = 'root';
        $bd_password = '';
        $bd_name = 'mybd';
        /*
        try { // Connexion à la base de données
            $mybd = new mysqli($bd_server, $bd_user, $bd_password, $bd_name);
        } catch(Exception $exc) {
            die('Base de donnée non trouvée');
        }*/

        $mybd = connectDB();

        $recherche_correspondance = $mybd->query("SELECT email_user, name_user, password_user FROM user WHERE email_user LIKE '$user_email' AND password_user LIKE '$user_password';");

        if($recherche_correspondance->num_rows > 0) { //Si au moins un utilisateur trouvé
            $results = $recherche_correspondance->fetch_assoc();
            /* Faudra penser à mettre des sessions au lieu des cookies */
            setcookie('user_data', serialize(['email' => $results['email_user'], 'name' => $results['name_user'], 'password' => $results['password']]));
            header('location: site/home/');
        }
    }
}
?>

<?php require_once('PHP-Required'.DIRECTORY_SEPARATOR.'head.php') ?>

<!-- FORMULAIRE DE CONNEXION -->
<div id="connexion-form-background" class="centering-elements full" style="background-image:url('http://localhost/Projet-SiteWeb-v1/Sources/blue-background-2.jpg')">
    <div id="connexion-form-container" class="centering-elements flex-column square-cadre">
        <h1>TitreSite</h1>
        <h2>Se connecter</h2>
        <form id="connexion-form" action="" method="POST">
            <label for="email-input">Identifiant :</label>
            <input id="email-input" type="email" name="user-email" value="<?= $user_email ?>" Required>
            <label for="password-input">Mot de passe :</label>
            <input id="password-input" type="password" name="user-password" Required>
            <button class="button-primary" type="submit">Connexion</button>
        </form>
        <a href="">S'inscrire</a>
    </div>
</div>