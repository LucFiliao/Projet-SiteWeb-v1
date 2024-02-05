<header>
    <nav>
        <div id="profile-user">
            <div id="profile-photo" style="border-radius:50%;width:40px;height:40px;background:black"></div>
            <p><span>Luc</span> | 
                <?php
                    if(isset($_COOKIE['user-email-cookie'])) {
                        $email_user = unserialize($_COOKIE['user-email-cookie']);
                        echo "$email_user";
                    }
                ?>
            </p>
        </div>
        <?php
        // Génnération automatique des différents liens selon le tableau $liens_nav
        $liens_nav = [
            'Mon Accueil' => '/PHP-Pages/homeUser.php',
            'A propos' => '/PHP-Pages/aPropos.php'
        ];
        foreach($liens_nav as $nom => $url) {
            echo "<a href='$url' class='";
            if($_SERVER['PHP_SELF'] === $url) {
                echo "active-page";
            }
            echo "'>$nom</a>";
        }
        ?>
    </nav>
    <div id="deconnexion-area">
        <a href="/index.php"><button class="button-primary">Déconnexion</button></a>
    </div>
</header>