<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>

<?php
require('./model/model.php');

	if(isset($_POST['forminscription'])) {
            $pseudo = $_POST['pseudo'];
            $mail = $_POST['mail'];
            
            $mdp = sha1($_POST['mdp']);

   
        if(!empty($_POST['pseudo']) AND !empty($_POST['mail'])  AND !empty($_POST['mdp']))
      {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 20) 
      {
         if ($mail ) 
         {
            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) 
            {
               $reqmail = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0)
               {
                  if($mdp)
                  {
                     $longueurKey = 13;
                     $key = "";
                     for($i=1;$i<$longueurKey;$i++) 
                     {
                        $key .= mt_rand(0,9);
                     }
                     $insertmbr = $bdd->prepare("INSERT INTO users(pseudo, mail, motdepasse, confirmkey) VALUES(?, ?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp, $key));
                     $header="MIME-Version: 1.0\r\n";
                     $header.='From:"Fire Wolf"<expediteur@example.com>'."\n";
                     $header.='Content-Type:text/html; charset="uft-8"'."\n";
                     $header.='Content-Transfer-Encoding: 8bit';
                     $message='
                     <html>
                        <body>
                           <div align="center">
                              <a href="http://localhost/site%20web/Espace%20Membre/Confirmation.php?pseudo='.urlencode($pseudo).'&key='.$key.'">Confirmer votre compte !</a>
                           </div>
                        </body>
                     </html>
                     ';
                     mail($mail, "Confirmation de compte !", $message, $header);
                     $erreur = "Votre compte a bien etait crée ! <a href=\"connection.php\">Me connecter</a>";
                  }
                  else
                  {
                     $erreur = "Vos mots de passes ne correpondent pas !";
                  }
               }
               else
               {
                  $erreur = "Adresse mail déja utilisée !";
               }
            }
            else
            {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         }
         else
         {
            $erreur = "Vos adresse mail ne corresponde pas !";
         }
      }
      else
      {
         $erreur = "Votre pseudo ne doit pas dépasser 20 caracteres !";
      }
   }
   else
   {
      $erreur = "Tous les champs doivent etre complétés !";
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
                <input type="text" class="box-input" name="pseudo" placeholder="Nom d'utilisateur" id="pseudo" />
                <input type="text" class="box-input" name="mail" placeholder="Email" required id="mail" />
                <input type="password" class="box-input" name="mdp" placeholder="Mot de passe" required id="mdp" />
                <button name="forminscription">S'incrire</button>
            </form>
        </div>
        <?php
        session_start();

        if (isset($_POST['formconnexion'])) {
            $mailconnect = htmlspecialchars($_POST['mailconnect']);
            $mdpconnect = sha1($_POST['mdpconnect']);
            if (!empty($mailconnect) and !empty($mdpconnect)) {
                $requser = $bdd->prepare("SELECT * FROM users WHERE mail = ? AND motdepasse = ?");
                $requser->execute(array($mailconnect, $mdpconnect));
                $userexist = $requser->rowCount();
                if ($userexist == 1) {
                    $userinfo = $requser->fetch();
                    $_SESSION['id'] = $userinfo['id'];
                    $_SESSION['pseudo'] = $userinfo['pseudo'];
                    $_SESSION['mail'] = $userinfo['mail'];
                    header("Location: dashborad.php?id=" . $_SESSION['id']);
                } else {
                    $erreur = "Mauvais mail ou mot de passe !";
                }
            } else {
                $erreur = "Tous les champs doivent être complétés !";
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
                <span>Vous avez un compte</span>
                <input name="mailconnect" type="email" placeholder="mail" required id="mailconnect" required />
                <input name="mdpconnect" type="password" placeholder="Mot de passe" required id="mdpconnect" />
                <a href="#">Mot de passe oublié?</a>
                <button name="formconnexion">Se connecter</button>
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