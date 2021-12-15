<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Sikorka bogatka</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../wyglad.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php include 'sluchalogowan.php';?>
</head>

<div class="header">
    <img class="img-responsive" src="../obrazy/template.png" alt="EROR">
</div>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Świat Ptaków</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="test.php">Galeria</a></li>
              <li class="active niewidac" id="Brawo"><a href="Brawo.php">Brawo zalogowałeś się</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Posty<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="migracja.php">Migracja Ptaków</a></li>
                        <li><a href="Ciekawostki o wronach.php">Wronie Ciekawostki</a></li>
                        <li><a href="Zywot bocianow.php">Bociany żywot</a></li>
                        <li><a href="Ptaki w kulturze.php">Ptaki w kulturze świata</a></li>
                        <li><a href="Jaskolka.php">Sikorka bogatka</a></li>
                        <li><a href="Wroble.php">Wróbel</a></li>
                    </ul>
                </li>
                <li><a href="pomoc.php">O Nas</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='rejestracja.php'><span class="glyphicon glyphicon-user" id ='logowanie'></span> Zarejestruj się</a></li>
                <li><a type="button" class="btn btn-link" data-toggle="modal" data-target="#Modal" id ='logowanie'><span
                            class="glyphicon glyphicon-log-in"></span> Zaloguj</a></li>
            </ul>
        </div>
    </div>
</nav>

<!----modal się zaczyna--->
<div id="Modal" class="modal fade" role='dialog'>
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header login-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title">Logowanie</h4>
            </div>
            <div class="modal-body">
                <!---tu jest logowanie-->
                <form method="post" role="form" action='../PHP_SQL/logowanie.php'>
                    <div class="form-group">
                        <label for="email">Login</label>
                        <input type="text" name="Login" class="form-control" id="email" placeholder=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="password">Hasło</label>
                        <input type="password" name="haslo" class="form-control" id="haslo"
                            placeholder="" required>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Zaloguj się</button>
                </form>
                <div class="row">
                   <div class="col-xs-7 col-sm-7 col-md-7">
                       
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <a href="rejestracja.php" class="btn btn-link">Zarejestruj się</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--koniec modalu--->

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <h3>Popularne Posty</h3>
            <p class="link-hover-effect"><a href="migracja.php">Migracja Ptaków</a></p>
            <p class="link-hover-effect"><a href="Ciekawostki o wronach.php">Wronie Ciekawostki</a></p>
            <p class="link-hover-effect"><a href="Zywot bocianow.php">Bociany żywot</a></p>
            <p class="link-hover-effect"><a href="Ptaki w kulturze.php">Ptaki w kulturze świata</a></p>

        </div>
        <div class="col-sm-8 text-left">
            <h1>Sikorka bogatka</h1>
            <br />
            <h2><small>Jest największa z europejskich sikor i w wielu miejscach najliczniejsza. Wierzch ciała oliwkowy,
                    a pokrywy skrzydłowe szaroniebieskie z białym prążkiem. Spód żółty z czarną, podłużną pręgą.
                    Skrzydła i ogon są czarnoszare, a na lotkach widać poprzeczną białą pręgę. Czarny dziób,
                    ciemnobrązowe tęczówki oczu i szaroniebieskie dość długie i silne nogi, dzięki którym porusza się
                    zręcznie pomiędzy gałązkami. Samiec wyróżnia się szerszym i dłuższym (nieprzerwanym od gardła po
                    podogonie) czarnym paskiem na żółtej piersi i brzuchu. U samic czarny pasek na spodzie ciała jest
                    węższy i często przerwany. Obie płci są zbliżonej wielkości. Młode mają bledsze odcienie upierzenia
                    – czerń zastąpioną brązem, policzki żółtawe, spód matowożółty i niekompletny czarny pasek
                    oddzielający jasny policzek od żółtego brzuch, ale poza tymi cechami są podobne do ptaków dorosłych.
                    Długość ciała 14–16 cm, z czego 28–32 mm przypada na czaszkę, w tym 10–13 mm na dziób. Rozpiętość
                    skrzydeł 22 cm, masa ciała ok. 20–30 g. Okres pierzenia trwa od połowy maja do połowy października.
                    Występują na terenach Europy, północno-zachodniej Afryki i umiarkowaną oraz cieplejszą strefę Azji
                    prócz najwyższych gór
                </small></h2>

            <div class="navbar navbar-inverse navbar-fixed-bottom custom-footer">

                <p class="navbar-text">Copyright © Świat Wróbli.pl 2021</p>

            </div>
        </div>
    </div>
</div>
</body>

</html>