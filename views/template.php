<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/css/style.css">
    <title><?= $titre ?></title> <!-- Élément spécifique -->
</head>

<body>
    <div class="global" id=" global">
        <div class="row d-flex text-align-center">
            <div class="col-12 pt-4">
                <a href="index.php">

                    <img class="text-center" src="template/images/image0.png" alt="logo" srcset="" width="200">
                </a>
            </div>
        </div>
        <div id="contenu">
            <?= $contenu ?>
            <!-- Élément spécifique -->
        </div>
        <footer id="piedBlog">

        </footer>
    </div> <!-- #global -->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
</script>
<script src="template/js/script.js">
</script>

</html>