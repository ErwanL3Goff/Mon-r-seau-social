<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages - Mon Réseau</title>
    <link rel="stylesheet" href="La_maison_du_style.css">
</head>
<body>
    <header>
        <div class="logo">MonRéseau</div>
        <?php include 'menu.php'; ?>
    </header>
    
    <div class="container">
        <h2>Messages</h2>
        <div class="section-content">
            <p><strong>Utilisateur A :</strong> Salut, comment ça va ?</p>
            <p><strong>Vous :</strong> Tout va bien, merci ! Et toi ?</p>
        </div>
        <textarea placeholder="Écrire un message..."></textarea>
        <button class="button">Envoyer</button>
    </div>
</body>
</html>
