<?php

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=10.33.126.15:3306;dbname=projet web 1', 'exiastore', 'exiastore');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
