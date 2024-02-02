<?php require_once 'PHP-Required/head.php' ?>

<!-- FORMULAIRE DE CONNEXION -->
<div id="connexion-form-background" class="centering-elements full">
    <div id="connexion-form-container" class="centering-elements flex-column square-cadre">
        <h1>TitreSite</h1>
        <h2>Se connecter</h2>
        <form id="connexion-form" action="" method="POST">
            <label for="email-input">Identifiant :</label>
            <input id="email-input" type="email" name="user-email" Required>
            <label for="password-input">Mot de passe :</label>
            <input id="password-input" type="password" name="user-password" Required>
            <button class="button-primary" type="submit">Connexion</button>
        </form>
        <a href="">S'inscrire</a>
    </div>
</div>