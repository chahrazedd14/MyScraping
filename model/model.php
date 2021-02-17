<?php
// Accès aux données

// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'connexion');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

// afficher plusieurs billets
// function get_billets()
// {
// $bdd = get_bdd();

// $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
// . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
// . ' order by BIL_ID desc');
// return $billets;

// }
// function get_bdd(){
// $bdd = new PDO(
// 'mysql:host=localhost;dbname=test;charset=utf8',
// 'root',
// '',
// array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
// );
// return $bdd;
// }



// // Renvoie les informations sur un billet
// // pour avoie le detaille d'un billet
// function get_billet($idBillet) {
// $bdd = get_bdd();
// $billet = $bdd->prepare('select BIL_ID as id, BIL_DATE as date,'
// . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
// . ' where BIL_ID=?');
// $billet->execute(array($idBillet));
// if ($billet->rowCount() == 1){
// return $billet->fetch(); // Accès à la première ligne de résultat
// }

// else{
// throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
// }
// }

// // Renvoie la liste des commentaires associés à un billet
// function getCommentaires($idBillet) {
// $bdd = get_bdd();
// $commentaires = $bdd->prepare('select COM_ID as id, COM_DATE as date,'
// . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
// . ' where BIL_ID=?');
// $commentaires->execute(array($idBillet));
// return $commentaires;
// }