<?php
$titre = 'dashborad';
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: vueAcceuil.php");
    exit();
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/css/dashbord.css">
    <title><?= $titre ?></title> <!-- Élément spécifique -->
</head>


<div class="container">
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <header>

                <div class="icons">

                    <div class="notification">
                        <a href="#">
                            <div class="notBtn" href="#">
                                <!--Number supports double digets and automaticly hides itself when there is nothing between divs -->
                                <div class="number">2</div>
                                <i class="fa fa-bell fa-2x"></i>
                                <div class="box">
                                    <div class="display">
                                        <div class="nothing">
                                            <i class="fa fa-child stick"></i>
                                            <div class="cent">Looks Like your all caught up!</div>
                                        </div>
                                        <div class="cont">
                                            <!-- Fold this div and try deleting evrything inbetween -->
                                            <div class="sec new">
                                                <a href="https://codepen.io/Golez/">
                                                    <div class="profCont">
                                                        <img class="profils"
                                                            src="https://c1.staticflickr.com/5/4007/4626436851_5629a97f30_b.jpg">
                                                    </div>
                                                    <div class="txt">James liked your post: "Pure css notification box"
                                                    </div>
                                                    <div class="txt sub">11/7 - 2:30 pm</div>
                                                </a>
                                            </div>
                                            <div class="sec new">
                                                <a href="https://codepen.io/Golez/">
                                                    <div class="profCont">
                                                        <img class="profils"
                                                            src="https://obamawhitehouse.archives.gov/sites/obamawhitehouse.archives.gov/files/styles/person_medium_photo/public/person-photo/amanda_lucidon22.jpg?itok=JFPi8OFJ">
                                                    </div>
                                                    <div class="txt">Annita liked your post: "Pure css notification box"
                                                    </div>
                                                    <div class="txt sub">11/7 - 2:13 pm</div>
                                                </a>
                                            </div>
                                            <div class="sec">
                                                <a href="https://codepen.io/Golez/">
                                                    <div class="profCont">
                                                        <img class="profils"
                                                            src="https://obamawhitehouse.archives.gov/sites/obamawhitehouse.archives.gov/files/styles/person_medium_photo/public/person-photo/amanda_lucidon22.jpg?itok=JFPi8OFJ">
                                                    </div>
                                                    <div class="txt">Brie liked your post: "Pure css notification box"
                                                    </div>
                                                    <div class="txt sub">11/6 - 9:35 pm</div>
                                                </a>
                                            </div>
                                            <div class="sec">
                                                <a href="https://codepen.io/Golez/">
                                                    <div class="profCont">
                                                        <img class="profils"
                                                            src="https://c1.staticflickr.com/4/3725/10214643804_75c0b6eeab_b.jpg">
                                                    </div>
                                                    <div class="txt">Madison liked your post: "Pure css notification
                                                        box"</div>
                                                    <div class="txt sub">11/6 - 4:04 pm</div>
                                                </a>
                                            </div>
                                            <div class="sec">
                                                <a href="https://codepen.io/Golez/">
                                                    <div class="profCont">
                                                        <img class="profils"
                                                            src="https://upload.wikimedia.org/wikipedia/commons/5/52/NG_headshot_white_shirt_square_Jan18.jpg">
                                                    </div>
                                                    <div class="txt">Ted liked your post: "Pure css notification box"
                                                    </div>
                                                    <div class="txt sub">11/6 - 10:37 am</div>
                                                </a>
                                            </div>
                                            <div class="sec">
                                                <a href="https://codepen.io/Golez/">
                                                    <div class="profCont">
                                                        <img class="profils"
                                                            src="https://upload.wikimedia.org/wikipedia/commons/d/dd/Pat-headshot-square.jpg">
                                                    </div>
                                                    <div class="txt">Tommas liked your post: "Pure css notification box"
                                                    </div>
                                                    <div class="txt sub">11/5 - 7:30 pm</div>
                                                </a>
                                            </div>
                                            <div class="sec">
                                                <a href="https://codepen.io/Golez/">
                                                    <div class="profCont">
                                                        <img class="profils"
                                                            src="https://c1.staticflickr.com/8/7407/13785133614_6254abb8c4.jpg">
                                                    </div>
                                                    <div class="txt">Claire liked your post: "Pure css notification box"
                                                    </div>
                                                    <div class="txt sub">11/5 - 2:30 pm</div>
                                                </a>
                                            </div>
                                            <div class="sec">
                                                <a href="https://codepen.io/Golez/">
                                                    <div class="profCont">
                                                        <img class="profils"
                                                            src="//c1.staticflickr.com/1/185/440890151_54c5b920b0_b.jpg">
                                                    </div>
                                                    <div class="txt">Jerimaiah liked your post: "Pure css notification
                                                        box"</div>
                                                    <div class="txt sub">11/5 - 1:34 pm</div>
                                                </a>
                                            </div>
                                            <div class="sec">
                                                <a href="https://codepen.io/Golez/">
                                                    <div class="profCont">
                                                        <img class="profils"
                                                            src="//c2.staticflickr.com/4/3397/3585544855_28442029a5_z.jpg?zz=1">
                                                    </div>
                                                    <div class="txt">Debra liked your post: "Pure css notification box"
                                                    </div>
                                                    <div class="txt sub">11/5 - 10:20 am</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </header>

        </div>

    </div>
</div>
<div class="container">

    <div class="dashboard">
        <div class="row">
            <div class="grid-container  col-4">
                <div class="row">
                    <div class="profile grid-area col-12 px-0">
                        <div class="img  profile-picture-upload">
                            <!--           <i class="fa fa-ellipsis-v"></i> -->
                            <img alt="Profile picture preview" class="imagePreview">
                            <button class="action-button mode-upload">Upload avatar</button>

                            <h3><?php echo $_SESSION['username']; ?></h3>

                            <div class="button action-button mode-upload">
                                <label for="lol"><i class="fa fa-camera" aria-hidden="true"></i></label>
                                <input id="lol" type="file" class="lol" name="fileInput"
                                    style="display: none;visibility: none;" />
                            </div>
                        </div>

                    </div>
                    <div class="last-like grid-area">
                        <div class="col-6 my-3">
                            <a href="http://" target="_blank">
                                <h2 class="py-2"><i class="fa fa-tachometer fa-md" aria-hidden="true"></i>
                                    Tableau de bord</h2>
                            </a>
                            <a>
                                <h2 class="py-2"><i class="fa fa-bug" aria-hidden="true"></i> Mes extractions</h2>
                            </a><a href="http://" target="_blank">
                                <h2 class="py-2"><i class="fa fa-history" aria-hidden="true"></i> Historiques</h2>
                            </a><a href="http://" target="_blank">
                                <h2 class="py-2"><i class="fa fa-user" aria-hidden="true"></i> Compte</h2>
                            </a>
                            <a href="./views/vueAcceuil.php">
                                <h2 class="py-2"><i class="fa fa-sign-out" aria-hidden="true"></i> Déconnection</h2>
                            </a>
                        </div>

                        <!-- <div class="profiles-display">
                            <div class="one-profile online">
                                <div class="img">
                                    <img
                                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                                </div>
                                <h4>Lea</h4>
                            </div>
                            <div class="one-profile">
                                <div class="img">
                                    <img
                                        src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                                </div>
                                <h4>Christopher</h4>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-8 grid-container ">



                <div class="edit-profile grid-area">
                    <div class="header">
                        <h1 class="mt-5"><i class="fa fa-tachometer fa-md" aria-hidden="true"></i>
                            Tableau de bord</h1>

                    </div>

                    <div class="container mt-4">


                        <form id="book-form" class="row mt55">
                            <div class="form-group d-flex col-12 pt-3">
                                <input type="text" id="title" class="form-control py-3"
                                    placeholder="Nom de l'extraction">

                            </div>
                            <div class="form-group d-flex col-12 pt-3">

                                <input type="text" id="extraction" class="form-control py-3" placeholder="URL du site">

                            </div>
                            <div class="form-group d-flex col-12 pt-3">

                                <input type="text" id="author" class="form-control py-3"
                                    placeholder="Container Principale">

                            </div>
                            <div class="form-group d-flex col-12 pt-3">
                                <input type="text" id="title" class="form-control py-3" placeholder="Image à la Une">

                            </div>
                            <div class="form-group d-flex col-12 pt-3">
                                <input type="text" id="isbn" class="form-control py-3"
                                    placeholder="Container de contenu ">

                            </div>

                            <div class="accordion">

                                <div class="option">
                                    <input type="checkbox" id="toggle1" class="toggle" />
                                        <label class="title py-3" for="toggle1" id=" elementExtrait">Elements à extraire
                                    </label>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt
                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-3 pt-3 pb-2">
                                        <input type="submit" value="Scraper" class="btn btn-block">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 grid-container pl-0">

                <div class="matchs grid-area">
                    <div class="header">
                        <h1 class="mt-5">Extraction</h1>
                    </div>
                    <div class="container">
                        <div class="row pt-5 mt-5">
                            <table class="table table-striped mt-5">
                                <thead>
                                    <tr>
                                        <th>Nom de l'extraction</th>

                                        <th>URL du site</th>
                                        <th>Container Principale</th>
                                        <th>Container de contenu</th>
                                        <th>Elements à extraire</th>
                                    </tr>
                                </thead>
                                <tbody id="book-list"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
</script>
<script src="template/js/dash.js">
</script>
<script src="template/js/extraction.js"></script>
<script src="./template/js/bull.js"></script>

</body>

</html>