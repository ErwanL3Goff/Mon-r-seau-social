<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal - Réseau Social</title>
    <link rel="stylesheet" href="main_style.css">
</head>
<body>
    <header>
        <div class="logo">Metal Gear Rising</div>
        <nav>
            <ul>
                <li><a href="main_menu.php">Accueil</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="messages.php">Messages</a></li>
                <li><a href="notifications.php">Notifications</a></li>
                <li><a href="parametres.php">Paramètres</a></li>
                <li><a href="deconnexion.php" class="logout">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="accueil">
            <h2>Fil d'actualités</h2>
            <div class="post">
                <h3>Utilisateur A</h3>
                <p>Voici une publication récente de l'utilisateur A.</p>
            </div>
            <div class="post">
                <h3>Utilisateur B</h3>
                <p>Voici une publication récente de l'utilisateur B.</p>
            </div>
        </section>

        <aside>
            <div class="sidebar">
                <h2>Suggestions d'amis</h2>
                <ul>
                    <li><a href="#ami1">Ami 1</a></li>
                    <li><a href="#ami2">Ami 2</a></li>
                    <li><a href="#ami3">Ami 3</a></li>
                </ul>
            </div>
        </aside>
    </main>

    <footer>
        <p>&copy; Dinamico Website. Erwan Zuckerberg Tous droits réservés.</p>
    </footer>
</body>
</html>
