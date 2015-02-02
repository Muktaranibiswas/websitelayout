<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/script.js"></script>


</head>
<body>
<header class="container">



    <br />
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <img src="images/GREEN-IT-3.gif" width="140" hight="60">
        </div>
<br><br>
        <div class="col-md-6 col-md-offset-2">
        <div>

            <span class="badge">42<span class="glyphicon glyphicon-bell"></span></span>
            <span class="badge">42<span class="glyphicon glyphicon-envelope"></span></span>
            <span class="badge">42<span class="glyphicon glyphicon-bell"></span></span>
            <span class="badge">42<span class="glyphicon glyphicon-envelope"></span></span>

        </div>

        </div>

</div>
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
<div class="row">
    <div class="col-md-4">



        <div class="form-group">

            <div class="input-group login-input">
                <span class="input-group-addon"><i class=" glyphicon glyphicon-dashboard"></i></span>
                <a href="#" class="list-group-item active"> Dashboard</a>
            </div>

            <div class="input-group login-input">
                <span class="input-group-addon"><i class=" glyphicon glyphicon-film"></i></span>
                <a href="#" class="list-group-item"> Layouts</a>
            </div>
            <div class="input-group login-input">
                <span class="input-group-addon"><i class=" glyphicon glyphicon-send"></i></span>
                <a href="#" class="list-group-item">UI Elements</a>
            </div>

            <div class="input-group login-input">
                <span class="input-group-addon"><i class=" glyphicon glyphicon-edit"></i></span>
                <a href="#" class="list-group-item">Forms</a>
            </div>

            <div class="input-group login-input">
                <span class="input-group-addon"><i class=" glyphicon glyphicon-list"></i></span>
                <a href="#" class="list-group-item">Tables</a>
            </div>

            <div class="input-group login-input">
                <span class="input-group-addon"><i class=" glyphicon glyphicon-folder-open"></i></span>
                <a href="#" class="list-group-item">Data Grids</a>
            </div>

            <div class="input-group login-input">
                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                <a href="#" class="list-group-item">Pages</a>
            </div>

            <div class="input-group login-input">
                <span class="input-group-addon"><i class=" glyphicon glyphicon-stats"></i></span>
                <a href="#" class="list-group-item">Extras</a>
            </div>


            <div class="input-group login-input">
                <span class="input-group-addon"><i class=" glyphicon glyphicon-stats"></i></span>
                <a href="#" class="list-group-item">Multi-Level Dropdown</a>
            </div>

            <div class="input-group login-input">
                <span class="input-group-addon"><i class=" glyphicon glyphicon-envelope"></i></span>
                <a href="#" class="list-group-item">Email</a>
            </div>

            <div class="input-group login-input">
                <span class="input-group-addon"><i class=" glyphicon glyphicon-stats"></i></span>
                <a href="#" class="list-group-item">charts</a>
            </div>
        </div>

</div>

    <div class="jumbotron">
        <h1>Hello</h1>
        <p>This is my Website</p>
        <?php


        echo "<br>";
        session_start();
        if(isset($_SESSION['name'])){
            echo "<br>";
            echo "Hi " . $_SESSION['name'] . "<br>";
            echo "<br>";
            echo "Your email is : " .$_SESSION['email']. "<br>";
            echo "<br>";
            echo "You was Registered at : " . $_SESSION['created'] . "<br>";
        }
        else{
            header("location:index.php");
        }
        ?>

    </div>

</div>
<br>

    <footer>
        <div class="well well-lg">
            <div class="row">

                <div class="col-md-3 col-md-offset-1">

                    <b>  copyright@ mukta rani biswas</b>
                     </div>
                   <div class="col-md-4">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="home.html">1</a></li>
                            <li><a href="about.php">2</a></li>
                            <li><a href="portfolio.html">3</a></li>
                            <li><a href="gallery.html">4</a></li>
                            <li><a href="registration.php">5</a></li>
                            <li><a href="login.php">4</a></li>
                            <li><a href="contact.php">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3">
                    <img a href="https://login.yahoo.com" src="images/6.png"></a>
                    <img src="images/7.jpeg">
                    <img src="images/8.png">
                    <img src="images/9.png">
                    <img src="images/99.png">
                    <img src="images/999.png">
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </footer>

</body>
</html>