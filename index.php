<?php require_once 'PHP-Required/head.php' ?>

<?php
$user_email = "";
$user_password = "";
if(isset($_POST['user-email'])) {
    $user_email = $_POST['user-email'];
}
if(isset($_POST['user-password'])) {
    $user_password = $_POST['user-password'];
}
?>

<!-- FORMULAIRE DE CONNEXION -->
<div id="connexion-form-background" class="centering-elements full">
    <div id="connexion-form-container" class="centering-elements flex-column square-cadre">
        <h1>TitreSite</h1>
        <h2>Se connecter</h2>
        <form id="connexion-form" action="" method="POST">
            <label for="email-input">Identifiant :</label>
            <input id="email-input" type="email" name="user-email" value="<?= htmlentities($user_email) ?>" Required>
            <label for="password-input">Mot de passe :</label>
            <input id="password-input" type="password" name="user-password" value="<?= htmlentities($user_password) ?>" Required>
            <button class="button-primary" type="submit">Connexion</button>
        </form>
        <a href="">S'inscrire</a>
    </div>
</div>

<?php
if($user_email === 'demo@demo.fr' && $user_password === 'demo468') {
    setcookie('user-email-cookie', serialize($user_email));
    echo "<script>window.location = 'PHP-Pages/homeUser.php';</script>";
}
?>