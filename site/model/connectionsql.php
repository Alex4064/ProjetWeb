<?php

// Connexion � la base de donn�es
try
{
    $bdd = new PDO('mysql:host=10.33.126.15:3306;dbname=projet web 1', 'exiastore', 'exiastore');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
