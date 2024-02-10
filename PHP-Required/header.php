<?php require_once('..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'PHP-Fonctions'.DIRECTORY_SEPARATOR.'fonctions.php');
$user_data = getUserData();
?>

<header>
    <nav>
        <div id="profile-user">
            <div id="profile-photo" style="border-radius:50%;width:40px;height:40px;background:black"></div>
            <p><span><?= $user_data['name'] ?></span> | 
                <?= $user_data['email'] ?>
            </p>
        </div>
        <?php
        // Génnération automatique des différents liens selon le tableau $liens_nav
        $liens_nav = [
            'Mon Accueil' => '/Projet-SiteWeb-v1/site/home/',
            'A propos' => '/Projet-SiteWeb-v1/site/a-propos/'
        ];
        foreach($liens_nav as $nom => $url) {
            echo "<a href='$url' class='";
            if($_SERVER['REQUEST_URI'] === $url) {
                echo "active-page";
            }
            echo "'>$nom</a>";
        }
        ?>
    </nav>
    <div id="deconnexion-area">
        <a href="http://localhost/Projet-SiteWeb-v1/"><button class="button-primary">Déconnexion</button></a>
    </div>
</header>