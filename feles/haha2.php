<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css"></link>
    <script src="bootstrap\js\bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="style.css"></link> 
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark" back>
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
  </div>
</nav>
<div class="container">




<div class="row">
    <div class="row mt-3 text-center">
        <div class="col">
            <h4>Feladat 3.5</h4>
            <hr>
        </div>
    </div>
</div>


<div class="row">
<div class="col">
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">Víz hőmérséklet</h5>
            <div class="card-body">
            <h4 class="card-title">C° :</h4>
            <form action="" method="GET">
                <input class="form-control mb-2" type="number" name="szam_1" id="szam_1">
                <button class="btn btn-secondary" name="submit" >kiértékelés</button>
                <?php 
                    if (isset($_GET['submit'])) 
                    {
                        if (isset($_GET['szam_1'])) 
                        {
                            $atkertSzam = $_GET['szam_1'];
                        }
                    }
                ?>
            </form>
            </div>
        </div>
        <div class="col"></div>
    </div>
    </div>
</div>
<br>
<?php
echo $atkertSzam . "\n";
if($atkertSzam < 0)
            {
                echo "jég halmaz állapotú";
            }
            elseif(0 <= $atkertSzam && 100 > $atkertSzam)
            {
                echo "folyékony halmaz állapotú";
            }
            elseif($atkertSzam >= 100)
            {
                echo "gőz halmaz állapotú";
            }
            else{
            echo " ";
            }
?>
<div class="row">
    <div class="row mt-3 text-center">
        <div class="col">
            <h4>Feladat 3.6</h4>
            <hr>
        </div>
    </div>
</div>


<div class="row">
<div class="col">
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">Kordinázák</h5>
            <div class="card-body">
            <h4 class="card-title">X,Y</h4>
            <form action="" method="GET">
                <input class="form-control mb-2" type="text"  name="szam_2" id="szam_2">
                <input class="form-control mb-2" type="text"  name="szam_3" id="szam_3">
                <button class="btn btn-secondary" name="submit" >kiértékelés</button>
                <?php

                $numbers2 = explode(",", $szam_2);
                $X_kord = $numbers2[0];
                $Y_kord = $numbers2[1];
                

            
echo $X_kord;
echo $Y_kord;
                ?>
                </form>
            </div>
        </div>
        <div class="col"></div>
    </div>
    </div>
</div>
<br>


</html>