<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription et de connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <div class="form-container">
            <h2>Connexion</h2>
            <form action="main_menu.php" method="POST">
                <label for="username_login">Nom d'utilisateur :</label>
                <input type="text" id="username_login" name="username" required>
                
                <label for="password_login">Mot de passe :</label>
                <input type="password" id="password_login" name="password" required>
                
                <button type="submit">Se connecter</button>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                echo "<h2>Inscription réussie</h2>";
                echo "<p>Nom d'utilisateur : $username</p>";
                echo "<p>Email : $email</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
