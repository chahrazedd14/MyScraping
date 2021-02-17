<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>

<?php
require('./model/model.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])) {
    // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    //requéte SQL + mot de passe crypté
    $query = "INSERT into `users` (username, email, password)
             VALUES ('$username', '$email', '" . hash('sha256', $password) . "')";
    // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "<div class='sucess'>
            <h3>Vous êtes inscrit avec succès.</h3>
            <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
      </div>";
    }
}
?>

<article>
    <div class="container align-center" id="container">
        <div class="form-container sign-up-container col-8">
            <form class="box" action="" method="post">
                <h1>Je m'inscrie</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></i>
                        <a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
                <span>ou utilisez votre email pour s'inscrire</span>
                <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" />
                <input type="text" class="box-input" name="email" placeholder="Email" required />
                <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
                <button>S'incrire</button>
            </form>
        </div>
        <?php
        session_start();
        if (isset($_POST['email1'])) {
            $username = stripslashes($_REQUEST['email1']);
            $username = mysqli_real_escape_string($conn, $username);
            $password = stripslashes($_REQUEST['motdepasse']);
            $password = mysqli_real_escape_string($conn, $password);
            $query = "SELECT * FROM `users` WHERE email='$username' and password='" . hash('sha256', $password) . "'";
            $result = mysqli_query($conn, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
            } else {
                $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
            }
        }
        ?>
        <div class="form-container sign-in-container">
            <form class="box" action="" method="post" name="login">
                <h1>se connecter</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></i>
                        <a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
                <span>or use your account</span>
                <input name="email1" type="email" placeholder="Email" required />
                <input name="motdepasse" type="password" placeholder="Mot de passe" required />
                <a href="#">Mot de passe oublié?</a>
                <button>Se connecter</button>
                <?php
                if (!empty($message)) {
                    echo $message;
                }
                ?>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Scrapeur!</h1>
                    <p class="text-left">Pour rester connecté avec nous, veuillez vous connectez avec nous vos
                        informations personnelles</p>
                    <button class="ghost" id="signIn">Se connecter</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Scrapeurs!</h1>
                    <p class="text-left">Entrez vos informations personnelles et commensez votre voyage avec nous</p>
                    <button class="ghost" id="signUp">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>

</article>


<?php

$contenu = ob_get_clean(); ?>

<?php require './views/template.php';