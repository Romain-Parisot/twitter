<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="https://cdn-icons-png.flaticon.com/512/733/733579.png">
    <link rel="stylesheet" href="style.css">
    <title>Twitter/Creation de Compte</title>
</head>
<body>
    <div>
        <h1>Twitter</h1>
        <img src="images/logo_twitter.png" alt="logo de twitter">
    </div>
    <div class="divform">
        <form action="envoie.php" method="POST">
            <div class="form">
                <div class="elmt_form">
                    <label for="nom">Entre ton nom</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div class="elmt_form">
                    <label for="pseudo">Entre ton pseudo</label>
                    <input type="text" name="pseudo" id="pseudo">
                </div>
                <div class="elmt_form">
                    <label for="mail">Entre ton adresse mail</label>
                    <input type="email" name="mail" id="mail">
                </div>
                <div class="elmt_form">
                    <label for="mdp">Entre ton mot de passe</label>
                    <input type="password" name="mdp" id="mdp">
                </div>
                <div class="elmt_form">
                    <label for="photopr">Entre le lien de ta photo de profil</label>
                    <input type="text" name="photopr" id="photopr">
                </div>
                <button type="submit" class="elmt_form">Envoyer</button>
            </div>
        </form>
        <?php 
        require 'database/connect.php'; 
        $jeRecois=$database->prepare("SELECT * FROM utilisateurs");
        $jeRecois->execute();
        $utilisateurs=$jeRecois->fetchAll(PDO::FETCH_ASSOC);
        ?>
    </div>
</body>
</html>