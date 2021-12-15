<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Ptaki w kulturze świata</title>
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
            <h1>Ptaki w Kulturze Świata</h1>
            <br />
            <h2>Żuraw</h2>
            <h2><small>W kulturze dalekowschodniej symbolizuje długowieczność, mądrość, piękno i wierność małżeńską
                    (żurawie są monogamiczne), w Hinduizmi uznawano go za ptaka zdradzieckiego, a u Celtów był oznaką
                    nieszczęścia.
                </small></h2>
            <hr>
            
            <h2>Paw </h2>
            <hr>
            <h2><small>W Japonii uznawany za symbol długowieczności, w krajach europejskich kojarzy się z pychą i
                    samozadowoleniem. </small></h2>
            <hr>
            <h2> Gęś</h2>
            <hr>
            <h2><small> Jest symbolem czystości i krzepkości. Wiąże się z tym porzekadło: „iż brzydka obmowa spływa po
                    kimś szlachetnym jak woda po gęsich piórach, czyli nie ima się go brud. W mowie potocznej częściej
                    jednak usłyszymy powiedzenia: „głupia gęś“. W starożytnym Rzymie darzy się je wielkim uznaniem,
                    ponieważ według legend uratowały miasto przed inwazją, podnosząc larum wielkim nocnym gęganiem.
                </small></h2>
            <hr>
            <h2>Bocian </h2>
            <hr>
            <h2><small> Praktycznie we wszystkich kulturach jest uznawany za zwiastuna wiosny, bogatych plonów i
                    dostarczyciela potomstwa. W Starożytnym Egipcie symbolizuje duszę </small></h2>
            <hr>
            <h2>Kruki i wrony</h2>
            <hr>
            <h2><small> W naszej tradycji kojarzące się ze śmiercią i złymi. W krajach północnych uznawane były za
                    herosów, którym ludzkość zawdzięczała przetrwanie w trudnym klimacie. </small></h2>
            <hr>
            <h2>Sowa</h2>
            <hr>
            <h2><small>Od wieków w krajach europejskich kojarzy się z mądrością, natomiast w Egipcie, Indiach, Chinach,
                    Ameryce Południowej i Środkowej jako nocny, bezgłośny drapieżnik budziła strach i stanowiła symbol.
                </small></h2>
            <hr>
            <h2>Papuga</h2>
            <hr>
            <h2><small> Uznaje się za symbol gadulstwa, natomiast jej umiejętności naśladowcze są uznawane za oznakę
                    inteligencji i umiejętności przystosowania się do otoczenia. </small></h2>
            <hr>
            <h2>Gołąb</h2>
            <hr>
            <h2><small>Dość uniwersalnie, bo w większości krajów uznawany jest za symbol pokoju i miłości. </small></h2>
            <hr>
            <h2>Orzeł</h2>
            <hr>
            <h2><small>W większości państw uznawany jest jako wyjątkowo odważny, synonim wojownika, ptak królewski.
                    Pojawił się w godłach narodowych wielu krajów. Stary Testament uznaje orła za zwierzę nieczyste, na
                    równi z sępem. </small></h2>
            <hr>
            <h2>Sęp </h2>
            <hr>
            <h2><small> W większości krajów, uważany jest za symbol pazerności i chciwości. </small></h2>
            <hr>
            <h2>Czapla </h2>
            <hr>
            <h2><small>Jest symbolem niedyskrecji i ciekawości. W Grecji jest uznawana za symbol ślepej namiętności i
                    zdrady. </small></h2>
            <hr>
            <h2>Jaskółka</h2>
            <hr>
            <h2><small> Jest symbolem wierności, szczęścia i płodności, Grecy zaś przypisywali im również dar
                    jasnowidzenia i leczenia ślepoty. </small></h2>
            <hr>
            <h2>Drozd </h2>
            <hr>
            <h2><small>Od wieków w Europie, śpiew drozda miał zwiastować deszcz. Uchodził również za przynoszącego
                    długowieczność, gdyż jego spożycie miało przedłużać życie. Chrześcijanie w jego dźwiękach
                    dopatrywali się śpiewu Rajskiego Ptaka, zwiastuna Dobrej Nowiny. </small></h2>
            <hr>
            <h2>Mewa </h2>
            <hr>
            <h2><small>Od wieków mewy uważane są za dusze zmarłych marynarzy, przez co zabicie lub śmierć tego ptaka
                    uważany jest za zły znak. </small></h2>
            <hr>
            <h2>Sokół </h2>
            <hr>
            <h2><small> Odgrywał ważną rolę w starożytnym Egipcie. Był uznawany za wcielenie Horusa syna Izydy i
                    Ozyrysa. Najwyższego z bogów egipskich. </small></h2>

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