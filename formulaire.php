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
        var_dump($_POST);

        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];


        $host = "http://localhost:8000/formulaire.php";
        $user = "Erwan Le Goff";
        $pass = "Cortex91";
        $db = "ma_base";

        ?>

   

</body>

</html>
