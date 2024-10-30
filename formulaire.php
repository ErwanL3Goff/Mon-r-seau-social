<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire d'Inscription</title>
</head>

<body>
    <h2>Formulaire d'inscription</h2>

    <form action="formulaire.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>

        <button type="submit" name="enregistrer">Enregistrer</button>
    </form>

    <?php

   

</body>

</html>
