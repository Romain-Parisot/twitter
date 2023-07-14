<?php require "header.php"?>
<body class="maindivparent">
    <?php require "jeRecois.php";
        require "DivG.php"?>

    <div class="maindiv divM">
        <form action="envoie_tweet.php" method="POST">
            <div class="divInputTweet">
                <input type="hidden" name="user" value="1">   
                <input type="text" class="tweet_publ tweet_off" placeholder="Entrer votre tweet ici" name="tweet" >
            </div>
        </form>
        <div class="divTweetSS">
            <?php foreach($tweets as $a){?>
                <div class="divTweet">
                    <img src="<?php echo $tweets[0]["users_img"]?>" alt="photo de profil de l'utilisateur" class="pp ppintw">
                    <p class="pseudo">@<?php echo $tweets[0]["users_pseudo"]?></p>
                    <p class="tweet_ctn"><?php echo $a["tweet_ctn"];?>
                    <!-- $tweetCtnTablPhp = '<script type="text/javascript">document.write(tweetCtnTabl);</script>';
                    if ($tweetCtnTablPhp==''){
                        echo $a["tweet_ctn"];
                    }
                    else{
                        echo $tweetCtnTablPhp;
                    } -->
                    </p>
                    <form method="POST" action="delete.php" class="btdel">
                        <input type="hidden" name="del" value="<?php echo $a["tweet_id"];?>">
                        <button type="submit">Supprimer</button>
                    </form>
                    <div class="divTweetDate">
                        <?php echo $a["tweet_date"];?>
                    </div>
                </div>
            <?php }?>
        </div>

        
    </div>
    <?php require "DivD.php"?>
    <script src="script.js"></script>
</body>
</html>