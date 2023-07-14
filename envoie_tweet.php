<?php
require "database/connect.php";
$tweet=$_POST['tweet'];

$data=[
    "formTweet"=>$tweet,    
];
$jeEnvoie=$database->prepare("INSERT INTO tweets (tweet_ctn) VALUES (:formTweet)");
$jeEnvoie->execute($data);

header("Location: index.php");
?>
