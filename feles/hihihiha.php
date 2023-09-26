
    <!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="style.css" src="style.css"></link>

    <script src="scripts/jquery.js"></script>
    
    <script src="scripts/input-mask.js"></script>
</head>
<body class="body">

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
            <h4>Feladat 3.2</h4>
            <h8><i>3.2. feladat I [Számok bekérése] Írjunk programot, mely bekér egy számot, és eldönti, hogy osztható-e 3-mal, 4-gyel vagy 9-cel
            </i></h8>
            <hr>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">Számbekérés</h5>
            <div class="card-body">
                <h4 class="card-title">Számok</h4>
                <form action="" method="GET">
                    <input class="form-control mb-2" type="number" name="szam_1" id="szam_1">
                    <button class="btn btn-secondary" name="submit" >Küldés</button>
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
    </div>
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">Számok: </h5>
            <div class="card-body">
            <p>Átkért szám: <?php echo isset($atkertSzam) ? $atkertSzam : "" ?></p>
            <?php
 
    $szamok = array();
    array_push($szamok, $atkertSzam);

    for ($i=0; $i < count($szamok); $i++) 
    { 
        if ($szamok[$i] % 3 == 0 || $szamok[$i] % 4 == 0 || $szamok[$i] % 9 == 0) 
        {
            echo $szamok[$i] . " osztahtó 3-mal vagy 4-gyel vagy 9-cel<br>";
        }
        else
        {
            echo $szamok[$i] . " nem osztahtó 3-mal, 4-gyel, 9-cel<br>";
        }
    }

    ?>
    <br>
    <br>
    
            </div>
        </div>
    </div>
</div>


<br>

<div class="row">
    <div class="row mt-3 text-center">
        <div class="col">
            <h4>Feladat 3.3</h4>
            <h8><i>3.3. feladat I [Átváltások] Készítsünk programot, mely bekér egy hőmérséklet értéket, majd felajánlja, hogy Celsiusból Fahrenheitbe, vagy Fahrenheitből Celsiusba váltja át.</i></h8>
            <hr>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">Hűmérséglet bekérő</h5>
            <div class="card-body">
                <h4 class="card-title">Hömérséglet</h4>
                <form action="" method="GET">
                    <input class="form-control mb-2" type="number" name="szam_1" id="szam_1">
                    <button class="btn btn-secondary" name="submit" >Küldés</button>
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
    </div>
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">Számok: </h5>
            <div class="card-body">
            <p>Átkért szám: <?php echo isset($atkertSzam) ? $atkertSzam : "" ?></p>
            <?php
 
    $szamok = array();
    array_push($szamok, $atkertSzam);

    for ($i=0; $i < count($szamok); $i++) 
    { 
        if ($szamok[$i] % 3 == 0 || $szamok[$i] % 4 == 0 || $szamok[$i] % 9 == 0) 
        {
            echo $szamok[$i] . " osztahtó 3-mal vagy 4-gyel vagy 9-cel<br>";
        }
        else
        {
            echo $szamok[$i] . " nem osztahtó 3-mal, 4-gyel, 9-cel<br>";
        }
    }

    ?>
    <br>
    <br>
    
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="row mt-3 text-center">
        <div class="col">
            <h4>Feladat 3.4</h4>
            <h8><i>3.4. feladat [Testtömeg indexek] Írjunk programot, mely a testsúly és a testmagasság alapján meghatározza a testtömegindexet, és kiírja, hogy milyen testsúly osztályba tartozik az adott illető. a testtömeg osztályokat meghatározhatjuk tetszőlegesen, de alapul vehetünk létező osztályozásokat is.
            </i></h8>
            <hr>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">Adatbekérő form</h5>
            <div class="card-body">
                <h4 class="card-title">Testtömeg indexek</h4>      
                <form action="" method="GET">
                    <h8><i>Testtömeg:(kg)</h8></i>
                    <input class="form-control mb-2" type="number" name="testtomeg" id="testtomeg">
                    <h8><i>Testmagasság:(cm)</h8></i>
                    <input class="form-control mb-2" type="number" name="magassag" id="magassag">
                    <button class="btn btn-secondary" name="submitTI" >Küldés</button>
                    <?php 
                    if (isset($_GET['submitTI'])) 
                    {
                        if (isset($_GET['testtomeg']) || isset($_GET['magassag'])) 
                        {
                            $testtomegN = $_GET['testtomeg'];
                            $magassagN = $_GET['magassag'];
                        }
                    }
                ?>
                </form>
                
                <form action="" method="GET">
                    
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">Testtömeg index: </h5>
            <div class="card-body">
            <p>Súly: <?php echo isset($testtomegN) ? $testtomegN : "" ?></p>
            <p>Magasság: <?php echo isset($magassagN) ? $magassagN : "" ?></p>
            <h6>TesttömegIndex: <?php $Tindex = $testtomegN / (($magassagN/100) * ($magassagN/ 100)); echo $Tindex; ?></h6>
            <h5>Kategória:</h5>
            <?php
            if($Tindex < 18.5)
            {
                echo "Sovány";
            }
            elseif(18.5 < $Tindex && 24.9 > $Tindex)
            {
                echo "Normál";
            }
            elseif($Tindex > 25 && $Tindex < 30)
            {
                echo "Túlsúly";
            }
            else
            {
                echo "Extrém túlsúly";
            }
            ?>
    <br>
    <br>
    
            </div>
        </div>
    </div>
</div>


<br>

</div>

</body>
</html>
        -->

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
            <h4 class="card-title">C˙:</h4>
            <form action="" method="GET">
                <input class="form-control mb-2" type="number" name="szam_1" id="szam_1">
                <button class="btn btn-secondary" name="submit" >Kiértékelés</button>
            </form>
            </div>
        </div>
        <div class="col"></div>
    </div>
    </div>
</div>
<br>
<?php 
    if (isset($_GET['submit'])) 
    {
     if (isset($_GET['szam_1']) && is_numeric($_GET['szam_1'])) 
     {
        $atkertSzam = $_GET['szam_1'];
     }
    }
?>
<p>Átkért szám: 
    <?php echo isset($atkertSzam) ? $atkertSzam : "" ?></p>



    <?php

    if($atkertSzam >= 0){ 
    { 
        if ($atkertSzam % 3 == 0 || $atkertSzam % 4 == 0 || $atkertSzam % 9 == 0) 
        {
            echo $atkertSzam." osztahtó 3-mal vagy 4-gyel vagy 9-cel<br>";
        }
        else
        {
            echo $atkertSzam." nem osztahtó 3-mal, 4-gyel, 9-cel<br>";
        }
    }
    }
    ?>

<br>

<div class="row">
    <div class="row mt-3 text-center">
        <div class="col">
            <h4>Feladat 3.3</h4>
            <hr>
        </div>
    </div>
</div>

<div class="row">
<div class="col">
    <div class="col-6">
        <div class="card">
            <h5 class="m-2">hőmérséklet bekérés</h5>
            <div class="card-body">
            <h4 class="card-title">Hőmérséklet:</h4>
            <form action="" method="GET">
                <input class="form-control mb-2" type="number" name="szam_1" id="szam_1">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>

                <button class="btn btn-secondary" name="submit" >Elfogad</button>
            </form>
            </div>
        </div>
        <div class="col"></div>
    </div>
    </div>
</div>

<br>

</div>


</body>