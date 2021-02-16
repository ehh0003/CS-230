<!--Erica Hall
2/16/2021
CS 230 Lab 4 -->

<?php
require 'includes/header.php';
?>

<main>
    <link rel="stylesheet" href="css/login.css">
    <div class="bg-cover">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="image/c1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/c2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/c3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



        </div>

        <div class="h-40 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post">

                    <h2> Please Login</h2>

                    <p class="hint-text">Login</p>


                    <div class="form-group">
                        <input type="text" class="form-control" name="uname-email" placeholder="Username/Email"
                            required="required">
                    </div>

                    <div class="form-group">
                        <input type="password" id="inputPassword" class="form-control" name="pwd" placeholder="Password"
                            required="required">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="login-submit" class="btn btn-outline-success btn-lg btn-block">
                            Sign in</button>
                    </div>
                </form>




            </div>


        </div>
    </div>

</main>