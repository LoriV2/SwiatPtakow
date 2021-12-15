<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Bociani żywot</title>
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
            <h1>Bociani żywot</h1>
            <h1><small>Bocian to piękny i popularny w Polsce ptak. W ciągu wiosny mieszka u nas w Europie, gdzie
                    spółkują ze sobą i polują na żaby i wszelkiego rodzaju drobne robactwo. Jednak na zimę opuszczają
                    nas i odlatują. W XIX wieku odkryto, że bociany odlatują do Afryki. Jednakże w Afryce nie troszczą
                    się o nie tak jak my. Często na nie polują, powodując, że do Polski powraca mniej ptactwa niż
                    odleciało. Jednak dzięki misjonarzom a Afryce, tubylcy są nauczani o tym jakie piękne i ważne są to
                    ptaki, dzięki czemu zmniejsza się ilość polowań na nie </small></h1>
            <hr>
            <h2><small>Para bocianów przystępuje do lęgów raz do roku, zazwyczaj pod koniec kwietnia, rzadko wcześniej.
                    Samica składa jaja w odstępach dwudniowych, najczęściej wieczorem, zazwyczaj w liczbie czterech,
                    choć może złożyć ich od 1 do 7. Inkubacja rozpoczyna się z chwilą złożenia pierwszego jaja, dlatego
                    pisklęta wykluwają się niejednocześnie, od 33 do 34 dni później. Pierwsze pisklę zazwyczaj ma
                    przewagę konkurencyjną nad innymi. Pisklęta bociana białego nie atakują siebie nawzajem, a sposób
                    karmienia ich przez rodziców powoduje, że silniejsze rodzeństwo nie może bezpośrednio wykluczyć z
                    rywalizowania o pokarm słabszego rodzeństwa. Silniejsze pisklęta nie są agresywne w stosunku do
                    słabszego rodzeństwa, zdarzają się jednak przypadki, że słabe lub małe pisklęta są czasami zabijane
                    przez rodziców. Uważa się, że takie zachowanie służy zwiększeniu szansy na przeżycie pozostałych
                    piskląt, gdy ilość pokarmu jest niewystarczająca dla odchowania całego lęgu.
                </small></h2>
            <hr>
            <h2><small>W Starożytnym Egipcie był przedstawiany hieroglificznie jako ba (dusza) zaś w języku hebrajskim
                    bociana określa się jako chasidah, co oznacza „miłosierny” i „łaskawy”. Mitologie grecka i rzymska
                    przedstawiały bociany jako wzory rodzicielskiego poświęcenia; wierzono, że nie umierają one ze
                    starości, lecz odlatują na wyspy i przybierają ludzką postać. Jeden z mitów opowiada o walce
                    bocianów (lub żurawiów) z Pigmejami, która rozpoczęła się, gdy Pigmejka Ojnoe, ukarana przez bogów
                    za dumę i odmowę składania im czci przemianą w bociana, próbowała w tej postaci porwać swego syna
                    Mopsosa. Afrykańczycy próbowali ją odpędzić, co zapoczątkować miało obawę i nienawiść bocianów w
                    stosunku do tego ludu. Wierzono również, że bociany opiekowały się swoimi rodzicami, karmiąc ich, a
                    nawet pomagając w wędrówkach; książki dla dzieci przedstawiły je jako modele wartości rodzinnych.
                    Greckie prawo zwane Pelargonia od starogreckiego słowa pelargos oznaczającego bociana zobowiązywało
                    obywateli do opieki nad swymi rodzicami w podeszłym wieku. Grecy uważali również, że zabicie bociana
                    może być karane śmiercią. Bocian był rzekomo chroniony w starożytnej Tesalii jako ptak polujący na
                    węże; jest powszechnie uważany za „białego ptaka” Wergiliusza. Rzymscy pisarze zauważyli, że
                    powracające wiosną bociany były dla rolników sygnałem, by sadzić winorośl. Dla chrześcijan to symbol
                    pobożności, zmartwychwstania i czystości, ale i sprawiedliwych pogan, którzy żyli przed Chrystusem.
                </small></h2>
            <div class="test">
                <div>
                    <div class="navbar navbar-inverse navbar-fixed-bottom custom-footer">

                        <p class="navbar-text">Copyright © Świat Wróbli.pl 2021</p>

                    </div>
                </div>
            </div>
        </div>
        </body>

</html>