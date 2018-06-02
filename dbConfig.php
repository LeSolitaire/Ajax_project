<?php

// Variables de connexion
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'ajax_projet';


//Connexion à la base de données
$db = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($db->connect_error) {
    die ("Connexion échouée : " .$db->connect_error);
}
else{
    echo "Connexion réussie";
}
?>