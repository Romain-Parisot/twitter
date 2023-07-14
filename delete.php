<?php
require "database/connect.php";
$del=$_POST['del'];

$data=[
    "formDel"=>$del
];

$jeDelete=$database->prepare("DELETE FROM tweets WHERE tweet_id=:formDel");
$jeDelete->execute($data);
header("Location: index.php");
?>
