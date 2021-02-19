<?php
session_start();
// Accès aux données

// Connexion à la base de données MySQL 
$bdd = new PDO('mysql:host=localhost;dbname=connexion', 'root', '');