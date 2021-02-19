<?php $titre = 'confiramation'; ?>

<?php ob_start(); ?>


<?php
require('./model/model.php');

if (isset($_GET['username'], $_GET['key']) and !empty($_GET['username']) and !empty($_GET['key'])) {
    $username = htmlspecialchars(urldecode($_GET['username']));
    $key = htmlspecialchars($_GET['key']);
    $requser = $bdd->prepare("SELECT * FROM users WHERE username = ? AND confirmkey = ?");
    $requser->execute(array($username, $key));
    $userexist = $requser->rowCount();
    if ($userexist == 1) {
        $user = $requser->fetch();
        if ($user['confirme'] == 0) {
            $updateuser = $bdd->prepare("UPDATE users SET confirme = 1 WHERE username = ? AND confirmkey = ?");
            $updateuser->execute(array($username, $key));
            echo "Votre compte a bien été confirmé !";
        } else {
            echo "Votre compte a déjà été confirmé !";
        }
    } else {
        echo "L'utilisateur n'existe pas !";
    }
}
?>