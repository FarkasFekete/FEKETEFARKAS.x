<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feladatok</title>

    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="style.css" src="style.css"></link>

    <script src="scripts/jquery.js"></script>
    
    <script src="scripts/input-mask.js"></script>
</head>

<body class="body">

<div class="container">
<div class="row">
    <div class="row mt-3 text-center">
        <div class="col">
            <h4>Feladat 3.7</h4>
            <hr>
        </div>
    </div>
</div>

<div class="row">
<div class="col">
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">Ponthatárok</h5>
            <div class="card-body">
            <h4 class="card-title">Elért pontszám :</h4>
            <form action="" method="GET">
                <input class="form-control mb-2" type="number" name="pont" id="pont" placeholder="Pontszám">
                <button class="btn btn-secondary" name="submitPontszam">kiértékelés</button>
                <?php
                if (isset($_GET['submitPontszam'])) {
                                    if (is_numeric($_GET['pont'])) {
                                        if (isset($_GET['pont'])) {
                                            $pontszamgetV = $_GET['pont'];
                                        }
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
<h5>Jegy:</h5>
<?php 
    if (isset($pontszamgetV)) {
        if ($pontszamgetV > 100) {
            echo "Max 100pont lehet";
        }
        else if ($pontszamgetV <= 100 && $pontszamgetV >= 90) {
            echo "5ös";
        } 
        else if ($pontszamgetV <= 89 && $pontszamgetV >= 80) {
            echo "4es";
        } 
        else if ($pontszamgetV <= 79 && $pontszamgetV >= 65) {
            echo "3as";
        } 
        else if ($pontszamgetV <= 64 && $pontszamgetV >= 50) {
            echo "2es";
        } 
        else if ($pontszamgetV <= 49 && $pontszamgetV >= 0) {
            echo "1es";
        } 
        else {
            echo "Vagy minusz vagy valami nemjó";   
        }
    } 
?>
<div class="container">
<div class="row">
    <div class="row mt-3 text-center">
        <div class="col">
            <h4>Feladat 3.8</h4>
            <hr>
        </div>
    </div>
</div>

<div class="row">
<div class="col">
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">Ponthatárok</h5>
            <div class="card-body">
            <h4 class="card-title">Elért pontszám :</h4>
            <form action="" method="GET">
                <input class="form-control mb-2" type="number" name="pont" id="pont" placeholder="Pontszám">
                <button class="btn btn-secondary" name="submitPontszam">kiértékelés</button>
                <?php
                if (isset($_GET['submitPontszam'])) {
                                    if (is_numeric($_GET['pont'])) {
                                        if (isset($_GET['pont'])) {
                                            $pontszamgetV = $_GET['pont'];
                                        }
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

</body>
</html>