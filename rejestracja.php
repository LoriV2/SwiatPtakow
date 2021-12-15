<html>


<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Strona Główna</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../wyglad.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body class='boidy'>
    <div class="modal-dialog ">
        <div class=" modal-content ">
            <form role="form" class='modal-body' method="post" action="../PHP_SQL/login.php">
                <div class="ikona">
                    <btn class="button"><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg></a></btn>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <select name="Płeć" id="Płeć" class="form-control input-sm">
                                <option value="nie podano">płeć</option>
                                <option value="Mężczyzna">Mężczyzna</option>
                                <option value="Kobieta">Kobieta</option>
                                <option value="Niebinarny">Niebinarny</option>
                                <option value="Heli">Helikopter</option>
                                <option value="Łódka">Łódź</option>
                                <option value="Francja">Francja</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="Imię" id="Imię" class="form-control input-sm" placeholder="Imię"
                                required>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="Nazwisko" id="Nazwisko" class="form-control input-sm"
                                placeholder="Nazwisko" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm"
                                placeholder="Adres Email" required>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="login" name="login" id="login" class="form-control input-sm"
                                placeholder="Login" required>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="username" name="userimie" id="userimie" class="form-control input-sm"
                                placeholder="Nazwa Użytkownika" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <script src="../scrypt.js"></script>

                                <input type="password" name="haslo" id="haslo" class="form-control input-sm"
                                    placeholder="Hasło" oninput='hasłosprawdzacz()' required>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="passwordConfirm" id="passwordConfirm"
                                    class="form-control input-sm" placeholder="Wprowadź ponownie hasło" required>
                            </div>
                        </div>
                    </div>

                    <p>Hasło powinno się składać z:</p>
                    <p>Przynajmniej <te id='Liczby'>1 Liczby</te>
                        <te id='Specjalne'>1 Znaku specjalnego</te>
                        <te id='ilosc'>8 Znaków</te>
                        <te id='litery'>1 litery</te>
                    </p>
                </div>
                <input type="submit" value="Register" class="btn btn-info btn-block">
            </form>
        </div>
    </div>



</body>

</html>
