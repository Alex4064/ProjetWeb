<?php

// Connexion � la base de donn�es
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
