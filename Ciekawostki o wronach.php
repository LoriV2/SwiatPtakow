<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Wronie ciekawostki</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../wyglad.css">
    <script src="scrypt.js"></script>
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
                <form role="form" action='../PHP_SQL/logowanie.php'>
                    <div class="form-group">
                        <label for="email">Login</label>
                        <input type="text" name="Login" class="form-control" id="email" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Hasło</label>
                        <input type="password" name="haslo" class="form-control" id="haslo" placeholder="" required>
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
            <figure>
                <h1>Ciekawostki o wronach</h1>
                <ul class="custom-list">
                    <li>Wrony należą do krukowatych.
                        Rodzina krukowatych obejmuje 133 gatunki żyjące na wszystkich kontynentach za wyjątkiem
                        Antarktydy.
                    </li>

                    <li>Wyróżnia się 6 podgatunków tych zwierząt.
                    </li>

                    <li>Wrony osiągają rozmiary od 48 do 52 centymetrów a rozpiętość ich skrzydeł dochodzi do 1 metra.
                    </li>

                    <li>Przeciętna wrona waży około 0,5 kg.
                    </li>

                    <li>Są ptakami wędrownymi, choć część populacji prowadzi osiadły tryb życia.
                    </li>

                    <li>Osiadłe zwierzęta zazwyczaj żyją na terenach miejskich.
                    </li>

                    <li>Wrony występują w Europie wschodniej i północnej. Obszar ich występowania rozciąga się od
                        Półwyspu Apenińskiego i rzeki Łaby aż po Ural.
                    </li>

                    <li>Wrona siwa często krzyżuje się w czarnowronem a w wyniku takich krzyżówek powstają osobniki o
                        zróżnicowanym upierzeniu o różnych proporcjach barw czarnej i szarej.
                    </li>

                    <li>Od lat 30 XX wieku wrony zaczęły gnieździć się w Warszawie. Później opanowały też inne miasta,
                        Poznań od lat 50 a Wrocław, Kraków i Gdańsk od lat 70.
                    </li>

                    <li>Ubarwienie wron nie jest zależne od ich płci, dlatego dymorfizm jest trudny do określenia.
                    </li>

                    <li>Wrony są wszystkożercami.
                    </li>

                    <li>Podstawą ich diety są drobne ssaki, ptaki oraz owady. Zdarza się, że wrony jedzą padlinę. Żywią
                        się też owocami, nasionami i odpadkami ze śmietników.
                    </li>

                    <li>Wrony posiadają inteligencję równą 7 letniemu dziecku. Potrafią zapamiętać twarze ludzi jak i
                        przekazać tą wiedzę potomstwu. Umieją wykorzystać proste narzędzia do zdobycia pokarmu
                        Wrony łączą się w pary na całe życie.
                    </li>
                </ul>
            </figure>
        </div>
    </div>
</div>
<div class="navbar navbar-inverse navbar-fixed-bottom custom-footer">

    <p class="navbar-text">Copyright © Świat Wróbli.pl 2021</p>

</div>
</body>

</html>