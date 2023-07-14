<?php
require "database/connect.php";
$tweet_search=$_GET['search'];

$jeRecherche=$database->prepare("SELECT * FROM tweets WHERE tweet_ctn LIKE '%$tweet_search%' ORDER BY tweet_date ASC");
$jeRecherche->execute();
$tweet=$jeRecherche->fetchAll(PDO::FETCH_ASSOC);
require "header.php"
?>

<body class="maindivparent">
    <?php
    require "database/connect.php";
    $jeRecois=$database->prepare("SELECT * FROM tweets ORDER BY tweet_date DESC");
    $jeRecois->execute();
    $tweets=$jeRecois->fetchAll(PDO::FETCH_ASSOC);

    $jeRecois2=$database->prepare("SELECT * FROM utilisateurs ");
    $jeRecois2->execute();
    $users=$jeRecois2->fetchAll(PDO::FETCH_ASSOC);
    require "DivG.php";
    ?>
    <div class="maindiv divM">
        <form action="envoie_tweet.php" method="POST">
            <div class="divInputTweet">
                <input type="text" class="tweet_publ tweet_off" placeholder="Entrer votre tweet ici" name="tweet" >
            </div>
        </form>
        <div class="divTweetAS">

                <?php foreach($tweet as $a){?>
                    <div class="divTweet">
                        <?php echo $a["tweet_ctn"];?>
                        <div class="divTweetDate">
                            <?php echo $a["tweet_date"];?>
                        </div>
                    </div>
                <?php }?>
                <a href="index.php">Retour a l'accueil</a>
    </div>
    <?php 
    require 'DivD.php'
    ?>
    <script src="script.js"></script>
</body>
</html>


