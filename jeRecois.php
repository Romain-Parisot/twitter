<?php
    require "database/connect.php";
    $jeRecois=$database->prepare("SELECT * FROM tweets INNER JOIN utilisateurs ON tweets.tweet_users_id=utilisateurs.users_id ORDER BY tweet_date DESC");
    $jeRecois->execute();
    $tweets=$jeRecois->fetchAll(PDO::FETCH_ASSOC);

    $jeRecois2=$database->prepare("SELECT * FROM utilisateurs ORDER BY users_id ASC");
    $jeRecois2->execute();
    $users=$jeRecois2->fetchAll(PDO::FETCH_ASSOC);

    
?>
<script>
    let tweetTabl=<?php echo json_encode($tweets); ?>;
</script>

    // <!-- echo '<pre>';
    // var_dump($tweets);
    // echo '</pre>'; -->

