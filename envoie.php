<?php
require "database/connect.php";
$nom=$_POST['nom'];
$pseudo=$_POST['pseudo'];
$mail=$_POST['mail'];
$mdp= password_hash($_POST['mdp'], PASSWORD_DEFAULT);
$photopr=$_POST['photopr'];

$data=[
    "formname"=>$nom,
    "formpseudo"=>$pseudo,
    "formmail"=>$mail,
    "formmdp"=>$mdp,
    "formphotopr"=>$photopr,
    
];
$jeEnvoie=$database->prepare("INSERT INTO utilisateurs (users_name, users_pseudo, users_mail, users_mdp, users_img) VALUES (:formname, :formpseudo, :formmail, :formmdp, :formphotopr)");
$jeEnvoie->execute($data);
header("Location: index.php");//fait retourner instant sur la page index 
?>
