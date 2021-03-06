<?php

require("../php/User.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="../static/js/rate.js"></script>
    <link rel="stylesheet" href="../static/css/rate.css">
    <link rel="stylesheet" href="../static/css/app.css">
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../home">
            <img src="../static/img/icon/logo.png" width="30" height="30" alt="Image">
            <label>WooChi</label>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../home">?????? <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../menu">??????&??????</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pets">????????????</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../rate">????????????</a>
                </li>
                <!-- if????????? -->
                <?php if(!empty($_COOKIE) && !empty($_COOKIE["id"])): ?>
                    <?php if(User::check()): ?>
                        <!-- if????????? -->
                        <?php if($_COOKIE["id"] !== "1"): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../order">????????????</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                                    ??????
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../member">??????&??????</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="../php/user_logout.php" class="btn btn-primary btn-sm" type="submit">??????</a>
                                </div>
                            </li>
                        <!-- if????????? -->
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                                    ????????????
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../search">??????&??????</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="../php/user_logout.php" class="btn btn-primary btn-sm" type="submit">??????</a>
                                </div>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php else: ?>
                    <!-- if????????? -->
                    <li class="nav-item">
                        <a class="nav-link" href="../register">
                            <button class="btn btn-primary btn-sm" type="submit" >????????????</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login">
                            <button class="btn btn-primary btn-sm" type="submit" >??????</button>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="center padding">
        <h4>
            <img src="../static/img/icon/rate.png" alt="img" width="35px">
            ????????????
            <img src="../static/img/icon/rate.png" alt="img" width="35px">
        </h4>
    </div>
    <div class="container">
        <!-- if????????? -->
            <?php if(User::check()): ?>
                <!-- if????????? -->
                <?php if($_COOKIE["id"] !== "1"): ?>
                    <div>
                        <button type="button" class="btn btn-primary btn-sm" onclick="showRateBox()">????????????</button>
                    </div>
                    <div class="hide">
                        <div class="card w-50" id="rate">
                            <div class="card-body">
                                <h5 class="card-title">????????????</h5>
                                <p class="card-text">
                                    <div class=" d-flex justify-content-center mt-200">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="stars" id="test">
                                                    <form action="">
                                                        <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
                                                        <label class="star star-5" for="star-5"></label>
                                                        <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
                                                        <label class="star star-4" for="star-4"></label>
                                                        <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
                                                        <label class="star star-3" for="star-3"></label>
                                                        <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
                                                        <label class="star star-2" for="star-2"></label>
                                                        <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
                                                        <label class="star star-1" for="star-1"></label>
                                                        <input type="hidden" name="stars" id="stars">
                                                    </form>
                                                </div>	
                                            </div>
                                        </div>
                                    </div>
                                </p>
                                <h5 class="card-title">????????????</h5>
                                <p>
                                    <textarea class="text" placeholder="?????????????????????????????????!" id="giveContent"></textarea>
                                </p>
                                <button type="button" class="btn btn-primary btn-sm" onclick="closeRateBox()">??????</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="closeRateBox()" id="giveRate">??????</button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <div id="rateContent"></div>
    </div>

</body>
</html>