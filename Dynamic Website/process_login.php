<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription et de connexion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">Metal Gear Rising</div>
    </header>
    <div class="container">
        <div class="form-container">
            <h2>Inscription</h2>
            <form action="process_registration.php" method="POST">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">S'inscrire</button>
            </form>
        </div>
        <?php
        session_start();
        include 'Data-base.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == "Erwan Le Goff" && $password == "Cortex91") {
                echo "<h2>Connexion réussie</h2>";
                echo "<p>Bienvenue, $username !</p>";
            } else {
                echo "<h2>Échec de la connexion</h2>";
                echo "<p>Nom d'utilisateur ou mot de passe incorrect.</p>";
            }
        }
        $conn->close();
        ?>

</html>