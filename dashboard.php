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
    <!-- <div class="profile-picture-upload">
        <img src="" alt="Profile picture preview" class="imagePreview">
        <button class="action-button mode-upload">Upload avatar</button>
        <input type="file" class="hidden" name="fileInput" />
    </div> -->
</div>
<div class="container">

    <div class="dashboard ">
        <div class="row">
            <div class="grid-container  col-4">
                <div class="row">
                    <div class="profile grid-area col-12 px-0">
                        <div class="img  profile-picture-upload">
                            <!--           <i class="fa fa-ellipsis-v"></i> -->
                            <img alt="Profile picture preview" class="imagePreview">
                            <button class="action-button mode-upload">Upload avatar</button>

                            <h3>Chloe</h3>
                            <h5 class="online">Online</h5>
                            <div class="button action-button mode-upload">
                                <label for="lol"><i class="fa fa-camera" aria-hidden="true"></i></label>
                                <input id="lol" type="file" class="lol" name="fileInput"
                                    style="display: none;visibility: none;" />
                            </div>
                        </div>
                        <div class=" profile-data">
                            <div class="data-details">
                                <h5>Age</h5>
                                <h4>24</h4>
                            </div>
                            <div class="data-details">
                                <h5>Location</h5>
                                <h4>Paris</h4>
                            </div>
                            <div class="data-details">
                                <h5>Score</h5>
                                <h4>150</h4>
                            </div>
                        </div>
                    </div>
                    <div class="last-like grid-area">
                        <h2>They liked your profile !</h2>
                        <div class="profiles-display">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 grid-container ">



                <div class="edit-profile grid-area">
                    <div class="header">
                        <h1>Edit your profile</h1>
                    </div>

                    <h1>Chloe C</h1>
                    <div class="edit-infos">
                        <h3>Personal information<i class="fa fa-pen"></i></h3>
                        <div class="profile-data">
                            <div class="data-details">
                                <h5>Age</h5>
                                <h4>24</h4>
                            </div>
                            <div class="data-details">
                                <h5>Gender</h5>
                                <h4>Woman</h4>
                            </div>
                            <div class="data-details">
                                <h5>Location</h5>
                                <h4>Paris</h4>
                            </div>
                        </div>
                    </div>
                    <div class="edit-interest">
                        <h3>What are you looking for ?<i class="fa fa-pen"></i></h3>
                        <p class="p-small">Men and Women</p>
                    </div>
                    <div class="edit-interest">
                        <h3>Bio<i class="fa fa-pen"></i></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam leo eu sapien
                            tristique, eu efficitur mi ornare. Aliquam erat volutpat. Pellentesque rhoncus volutpat
                            laoreet.Aliquam erat volutpat. Pellentesque rhoncus volutpat laoreet.Aliquam erat volutpat.
                            Pellentesque rhoncus volutpat laoreet.</p>
                    </div>
                    <div class="edit-interest">
                        <h3>Your interests <i class="fa fa-pen"></i></h3>
                        <p>#traveling #cooking #summer #jazz #friends #art #walk #dogs #design #architecture #photo
                            #nature #fun </p>
                    </div>
                    <div class="edit-picture">
                        <div class="picture">
                            <img
                                src="https://images.unsplash.com/photo-1540218660726-95c6764dd7ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80">
                        </div>
                        <div class="picture">
                            <img
                                src="https://images.unsplash.com/photo-1467020421390-2fb2647a413e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1235&q=80">
                        </div>
                        <div class="picture">
                            <img
                                src="https://images.unsplash.com/photo-1488751045188-3c55bbf9a3fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        </div>
                        <div class="picture-add">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 grid-container">




                <div class="matchs grid-area">
                    <div class="header">
                        <h1>Your Matchs</h1>
                    </div>
                    <div class="display-matchs">
                        <div class="one-match">
                            <div class="one-match-content">
                                <img
                                    src="https://images.unsplash.com/photo-1517935541300-19815e88fa63?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                                <div class="match-info">
                                    <h4>John, 30</h4>
                                    <h5>Last seen 2d ago</h5>
                                </div>
                            </div>
                        </div>
                        <div class="one-match">
                            <div class="one-match-content">
                                <img
                                    src="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                                <div class="match-info">
                                    <h4>Alicia, 23</h4>
                                    <h5 class="online">Online</h5>
                                </div>
                            </div>
                        </div>
                        <div class="one-match">
                            <div class="one-match-content">
                                <img
                                    src="https://images.unsplash.com/photo-1495078065017-564723e7e3e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1300&q=80">
                                <div class="match-info">
                                    <h4>Dan, 49</h4>
                                    <h5>Last seen 15h ago</h5>
                                </div>
                            </div>
                        </div>
                        <div class="one-match">
                            <div class="one-match-content">
                                <img
                                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                                <div class="match-info">
                                    <h4>Christopher, 27</h4>
                                    <h5>Last seen 1w ago</h5>
                                </div>
                            </div>
                        </div>
                        <div class="one-match">
                            <div class="one-match-content">
                                <img
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                                <div class="match-info">
                                    <h4>Lea, 25</h4>
                                    <h5 class="online">Online</h5>
                                </div>
                            </div>
                        </div>
                        <div class="one-match">
                            <div class="one-match-content">
                                <img
                                    src="https://images.unsplash.com/photo-1517935541300-19815e88fa63?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                                <div class="match-info">
                                    <h4>John, 30</h4>
                                    <h5>Last seen 2d ago</h5>
                                </div>
                            </div>
                        </div>
                        <div class="one-match">
                            <div class="one-match-content">
                                <img
                                    src="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                                <div class="match-info">
                                    <h4>Alicia, 23</h4>
                                    <h5 class="online">Online</h5>
                                </div>
                            </div>
                        </div>
                        <div class="one-match">
                            <div class="one-match-content">
                                <img
                                    src="https://images.unsplash.com/photo-1495078065017-564723e7e3e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1300&q=80">
                                <div class="match-info">
                                    <h4>Dan, 49</h4>
                                    <h5>Last seen 15h ago</h5>
                                </div>
                            </div>
                        </div>
                        <div class="one-match">
                            <div class="one-match-content">
                                <img
                                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                                <div class="match-info">
                                    <h4>Christopher, 27</h4>
                                    <h5>Last seen 1w ago</h5>
                                </div>
                            </div>
                        </div>
                        <div class="one-match">
                            <div class="one-match-content">
                                <img
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                                <div class="match-info">
                                    <h4>Lea, 25</h4>
                                    <h5 class="online">Online</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script src="template/js/dash.js">
    </script>

</html>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
</script>
<script src="template/js/dash.js">
</script>

</html>