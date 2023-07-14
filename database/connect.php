<?php
try{
    $database=new PDO('mysql:host=localhost;dbname=twitter','root','root');
} catch(PDOExeption $error){
    echo $error;
    die;
}
?>