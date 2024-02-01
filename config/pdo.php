<?php 
try{

// DSN - database ou data source name - de connexion

$dsn = "mysql:dbname=eshop;host=localhost";

$options = array(PDO::ATTR_ERRMODE => PDO::FETCH_ASSOC);

// On vient instancer PDO
$pdo = new PDO($dsn, "root", "", $options);

echo "connexion réussie";

} catch (PDOException $error){

die("erreur : " . $error->getMessage());

}

