<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Strona Główna</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../wyglad.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php include 'sluchalogowan.php';?>
  <?php include 'pore.php';?>
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
              <li class="active" id="Brawo"><a class='none'href="Brawo.php">Brawo zalogowałeś się</a></li>
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
                <form method="post" role="form" action='PHP_SQL/logowanie.php'>
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
            <h1>Witajcie na Świat Ptaków </h1>
            <h1><small>Świat Ptaków to strona dla entuzjastów tych wspaniałych stworzeń. Odnajdziesz tutaj ciekawostki,
                    informacje jak i żarty i historyjki o naszych upierzonych przyjaciołach. Tak więc jeżeli jesteś
                    zafascynowany ptactwem lub po prostu jesteś ciekawy świata ptaków, jest to strona dla
                    ciebie!</small></h1>
            <hr>
            <h2>Najbardziej inteligentne ptaki </h2>
            <h2>
                <small>Wrony posiadają niezwykle wysoką inteligencję pozwalającą im na wykorzystywanie narzędzi i praw
                    fizyki na swoją korzyść. Podczas pewnego eksperymentu, naukowcy umieścili robaka (ulubiony pokarm
                    wron) w zbiorniku, w którym poziom wody był za niski dla wron do dosięgnięcia. Wrona postanowiła
                    wrzucać kamyki do zbiornika, powodując podniesienie się wody, dzięki czemu mogła złapać robaka.
                    Eksperyment powtórzono parę razy i wrona nauczyła się, że jeżeli będzie wrzucać większe kamyki to
                    szybciej podniesie się poziom wody. Tak więc okazuje się, że wrony znają prawo wyporności
                    Arystotelesa
                    Wrony są na tyle inteligentne, że potrafią wykorzystywać proste narzędzia i nawet je wytwarzać! Te
                    wspaniałe ptaki umieją zapamiętać ludzką twarz, ją rozpoznać a nawet przekazać tą wiedzę innym
                    wronom!
                    Ptaki te, jak odkryli badacze z Izraela, potrafią współpracować ze sobą a nawet stworzyć plan
                    działania w celu zdobyci jedzenia.
                    Jednak nie tylko wrony są mądrymi ptakami. Pewnym naukowcom udało się nauczyć gołębie liczyć do
                    trzech, po czym te same nauczyły się liczyć do dziewięciu.
                </small>
            </h2>
        </div>
    </div>
</div>
<div class="navbar-inverse navbar-fixed-bottom custom-footer">

    <p class="navbar-text">Copyright © SwiatPtakow.pl 2021</p>

</div>

</body>

</html>