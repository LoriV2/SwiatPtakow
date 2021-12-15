<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeria</title>
  <link rel="icon" type="image/x-icon" href="../favicon.ico">
  <link rel="stylesheet" href="../wyglad.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<?php include 'sluchalogowan.php';?>

</head>

<body>

  <style>
    .custom {
      max-height: 300px;
      object-fit: cover;
    }
  </style>



  


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
                      <a href="odzyskiwaniehasla.html" class="btn btn-link">Zapomniałeś hasła?</a>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4">
                      <a href="rejestracja.html" class="btn btn-link">Zarejestruj się</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--koniec modalu--->

  <div class="container-fluid text-center">
    <div class="col-sm-8 text-left">
      <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">

            <div class="item active">
              <img src="../obrazy/1.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Modrosójka błękitna</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/2.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Żuraw biały</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/3.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Atłasowiec czarny</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/4.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Kiwi</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/5.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Fratercula</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/6.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Koliber</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/7.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Bielik Amerykański</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/8.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Pelikan</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/9.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Tukan</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/10.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Dzięcioł</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/11.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Sowa</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/12.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Paw indyjski</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/13.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Kardynał szkarłatny</h1>
              </div>
            </div>

            <div class="item">
              <img src="../obrazy/14.png" alt="EROR" style="width:100%;">
              <div class="carousel-caption">
                <h1>Pingwin</h1>
              </div>
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
          <div class="test"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 sidenav">
      <h3>Informacje</h3>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Modros%C3%B3jka_b%C5%82%C4%99kitna">Modrosójka
          błękitna</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/%C5%BBuraw_bia%C5%82y">Żuraw biały</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/At%C5%82asowiec_czarny">Atłasowiec czarny</a>
      </p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Kiwi">Kiwi</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Fratercula">Fratercula</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Kolibrowate">Koliber</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Orze%C5%82_(taksonomia_ludowa)">Bielik
          Amerykański</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Pelikany">Pelikan</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Tukanowate">Tukan</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Dzi%C4%99cio%C5%82_du%C5%BCy">Dzięcioł</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Sowy">Sowa</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Paw_indyjski">Paw indyjski</a></p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Drozd_w%C4%99drowny">Kardynał szkarłatny</a>
      </p>
      <p class="link-hover-effect"><a href="https://pl.wikipedia.org/wiki/Pingwin_bia%C5%82obrewy">Pingwin</a></p>
    </div>

    <div class="test"></div>



  </div>
  <div class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text">Copyright © Świat Wróbli.pl 2021</p>
    </div>
  </div>

</body>

</html>

