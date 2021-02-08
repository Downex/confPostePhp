<?php
//CONF BDD
$db="confposte";
$dbhost="localhost";
$dbport=3306; //3307 en local
$dbuser="root"; // root en local
$dbpasswd="";
 
$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");

$stmt = $pdo->prepare("SELECT libelle FROM hello");
$stmt->execute();

$res = $stmt->fetch();

//Hello World
echo $res[0];
?>