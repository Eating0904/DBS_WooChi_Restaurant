<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- date picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- <script src="/DBS_WooChi_Restaurant/static/js/home.js"></script> -->
    <script src="../static/js/base.js"></script>

    <!-- test new clock selector-->

    <link href="bootstrap-datetimepicker.min.css" rel="external nofollow" rel="stylesheet" />
<script src="bootstrap-datetimepicker.js"></script>
<script src="bootstrap-datetimepicker.zh-CN.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../home">
            <img src="../logo.png" width="30" height="30" alt="Image">
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
                <li class="nav-item">
                    <a class="nav-link" href="../order">????????????</a>
                </li>
                <!-- if??????????????? -->
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
                <!-- if??????????????? -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        ????????????
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../member">????????????</a>
                        <a class="dropdown-item" href="../membercontact">????????????</a>
                        <div class="dropdown-divider"></div>
                        <button class="btn btn-primary btn-sm" type="submit">??????</button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <form action="">
            <h4>????????????</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    ???????????????
                </label>
            </div>
            <div>
                ?????? : <input type="text"><br>
                ?????? : <input type="text"><br>
                ?????? : <input type="text"><br>
            </div>
        </form>

        <hr>

        <form action="">
            <h4>????????????</h4>
            <div class="form-group">
                <div class="row">
                    ?????? : &emsp;
                    <select class="col-mx-2">
                        <option value="1">2020</option>
                        <option value="2">2021</option>    
                        <option selected>2022</option>
                        <option value="3">2023</option>
                        <option value="4">2024</option>
                    </select>
                    &thinsp;???&emsp;
                    <select class="col-mx-1">
                        <option selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                        <option value="6">7</option>
                        <option value="7">8</option>
                        <option value="8">9</option>
                        <option value="9">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                    </select>
                    &thinsp;???&emsp;
                    <select class="col-mx-1">
                        <option selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                    </select>
                    &thinsp;???&emsp;
                </div>
                <div class="row">
                    ?????? : &emsp;
                    <select class="col-mx-1">
                        <option selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                    </select>
                    &thinsp;???&emsp;
                </div>   
            </div>
            <!-- date picker -->
            <input type="text" class="form-control datepicker " id="start_date" name="start_date" placeholder="YYYY-MM-DD">

        </form>
    </div>


    <button type="button" onclick="showWindow()">show</button>
    <div class="cover" onclick="closeWindow()"></div>
    <div class="window">
        <h3>small window</h3>
        <p>this is a small window</p>
        <button type="button" onclick="closeWindow()">close</button>
    </div>
    <style>
        html, body{
            height: 100%;
        }
        .window{
            border: solid 1px #000;
            background-color: #fff;
            /* ?????? */
            position: absolute;
            width: 30%;
            top: 200px;
            left: 35%;

            /* ?????? */
            display: none;
        }
        .cover{
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;

            display: none;
        }
    </style>
    <script>
        function showWindow() {
            document.getElementsByClassName("cover")[0].style.display = "block";
            document.getElementsByClassName("window")[0].style.display = "block";
        }
        function closeWindow() {
            document.getElementsByClassName("cover")[0].style.display = "none";
            document.getElementsByClassName("window")[0].style.display = "none";
        }
    </script>
</body>
</html>