<?php
// //CONF BDD distance
// $db="confposte";
// $dbhost="localhost";
// $dbport=3306;
// $dbuser="francois"; 
// $dbpasswd="root";

//CONF BDD local
$db="confposte";
$dbhost="localhost";
$dbport=3307;
$dbuser="root";
$dbpasswd="";
 
$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");

$stmt = $pdo->prepare("SELECT libelle FROM hello");
$stmt->execute();

$res = $stmt->fetch();

//Hello World
echo $res[0];
?>