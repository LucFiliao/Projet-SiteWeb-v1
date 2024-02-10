<?php
function getUserData() {
    if(isset($_COOKIE['user_data'])) {
        $user_data = unserialize($_COOKIE['user_data']);
        return $user_data;
    }
    header('location: ../../');
    die('Erreur');
}

function connectDB($server = 'localhost', $user = 'root', $mdp = '', $namebd = 'mybd') {
    try {
        $bd = new mysqli($server, $user, $mdp, $namebd);
    } catch(Exception $exp) {
        die('Base de données introuvable');
    }
    return $bd;
}