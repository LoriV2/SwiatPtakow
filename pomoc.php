<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>O Nas</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../wyglad.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
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
            <h1>O Nas</h1>
            <h1><small>Strona została stworzona na potrzebe zaliczenia projektu z
                    <br />
                    przedmiotów Programowanie aplikacji internetowych oraz Witryny i aplikacje internetowe.</small></h1>
            <hr>
            <h2>Poznaj osoby odpowidzialne za tworzenie strony.</h2>
            <h2>
                <small><a href="#kg" data-toggle="collapse">Kamil Godlewski</a>
                    <div id="kg" class="collapse">
                        Zainteresowania: Pasjonat gier wideo oraz fan kultury Japońskiej.
                        <br />
                        Kontakt: <btn class="button"><a
                                href="https://steamcommunity.com/profiles/76561198352429559/"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-steam" viewBox="0 0 16 16">
                                    <path
                                        d="M.329 10.333A8.01 8.01 0 0 0 7.99 16C12.414 16 16 12.418 16 8s-3.586-8-8.009-8A8.006 8.006 0 0 0 0 7.468l.003.006 4.304 1.769A2.198 2.198 0 0 1 5.62 8.88l1.96-2.844-.001-.04a3.046 3.046 0 0 1 3.042-3.043 3.046 3.046 0 0 1 3.042 3.043 3.047 3.047 0 0 1-3.111 3.044l-2.804 2a2.223 2.223 0 0 1-3.075 2.11 2.217 2.217 0 0 1-1.312-1.568L.33 10.333Z" />
                                    <path
                                        d="M4.868 12.683a1.715 1.715 0 0 0 1.318-3.165 1.705 1.705 0 0 0-1.263-.02l1.023.424a1.261 1.261 0 1 1-.97 2.33l-.99-.41a1.7 1.7 0 0 0 .882.84Zm3.726-6.687a2.03 2.03 0 0 0 2.027 2.029 2.03 2.03 0 0 0 2.027-2.029 2.03 2.03 0 0 0-2.027-2.027 2.03 2.03 0 0 0-2.027 2.027Zm2.03-1.527a1.524 1.524 0 1 1-.002 3.048 1.524 1.524 0 0 1 .002-3.048Z" />
                                </svg></a></btn>
                        <btn class="button"><a href="https://discord.gg/xuHdvP4w"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-discord" viewBox="0 0 16 16">
                                    <path
                                        d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z" />
                                </svg>
                                </svg></a></btn>
                        <img class="img-responsive" src="../obrazy/padoru.gif" alt="EROR">
                    </div>
                    <br />
                    <a href="#ml" data-toggle="collapse">Lorenzo Marinucci</a>
                    <div id="ml" class="collapse">
                        Zainteresowania: Spanie, słuchanie muzyki, ekonomia, programowanie.
                        <br />
                        Kontakt: <btn class="button"><a href="https://steamcommunity.com/id/tadadda/"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-steam" viewBox="0 0 16 16">
                                    <path
                                        d="M.329 10.333A8.01 8.01 0 0 0 7.99 16C12.414 16 16 12.418 16 8s-3.586-8-8.009-8A8.006 8.006 0 0 0 0 7.468l.003.006 4.304 1.769A2.198 2.198 0 0 1 5.62 8.88l1.96-2.844-.001-.04a3.046 3.046 0 0 1 3.042-3.043 3.046 3.046 0 0 1 3.042 3.043 3.047 3.047 0 0 1-3.111 3.044l-2.804 2a2.223 2.223 0 0 1-3.075 2.11 2.217 2.217 0 0 1-1.312-1.568L.33 10.333Z" />
                                    <path
                                        d="M4.868 12.683a1.715 1.715 0 0 0 1.318-3.165 1.705 1.705 0 0 0-1.263-.02l1.023.424a1.261 1.261 0 1 1-.97 2.33l-.99-.41a1.7 1.7 0 0 0 .882.84Zm3.726-6.687a2.03 2.03 0 0 0 2.027 2.029 2.03 2.03 0 0 0 2.027-2.029 2.03 2.03 0 0 0-2.027-2.027 2.03 2.03 0 0 0-2.027 2.027Zm2.03-1.527a1.524 1.524 0 1 1-.002 3.048 1.524 1.524 0 0 1 .002-3.048Z" />
                                </svg></a></btn> Discord(Lori#3099)
                        <img class="img-responsive" src="../obrazy/stary.jpg" alt="EROR">
                    </div>
                    <br />
                    <a href="#pw" data-toggle="collapse">Piotr Wojciech Wiśniewski</a>
                    <div id="pw" class="collapse">
                        Zainteresowania: Entuzjasta starych stroi i kapeluszy oraz znawca piratów
                        <img class="img-responsive" src="../obrazy/lucznik.jpg" alt="EROR">
                    </div>
                </small>
            </h2>
            <hr>
            <h2>
                <small>Kontakt: swiatptakowpomoc@loriv2.ct8.pl </small>

            </h2>


        </div>
    </div>
</div>
</body>

</html>

