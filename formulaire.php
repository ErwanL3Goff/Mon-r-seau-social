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

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];


        $servername = "http://localhost:8000/formulaire.php";
        $username = "Erwan Le Goff";
        $password = "Cortex91";
        $dbname = "ma_base";


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("La connexion a échoué : " . $conn->connect_error);
        }


        $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nom, $email, $mot_de_passe);


        if ($stmt->execute()) {
            echo "<h3>Inscription réussie !</h3>";
            echo "Nom : " . htmlspecialchars($nom) . "<br>";
            echo "Email : " . htmlspecialchars($email) . "<br>";
            echo "Mot de passe : (non affiché pour des raisons de sécurité)<br>";
        } else {
            echo "Erreur : " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
    ?>

</body>

</html>