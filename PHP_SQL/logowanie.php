<html>
  

<body>

  <?php
  session_start();
  $servername = "mysql.ct8.pl";
  $database = "m26127_danelogowania";
  $username = "m26127";
  $password = "Lol#lol#1";

  $has = $_POST['haslo'];
  $login = $_POST['Login'];

  $has = hash('sha256', $has);
  $has = base64_encode($has);
  $has = hash('sha256', $has);
  $has = hash('sha256', $has);
  $login = hash('sha256', $login);

  $conn = mysqli_connect($servername,  $username, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM `loginhaslo` WHERE `Login` = '$login' AND `haslo` = '$has'";
  
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  
  $count = mysqli_num_rows($result);
  if ($count == 1) {
    echo "<h1><center> Zostałeś pomyślnie zalogowany </center></h1>";
    header("location: https://swiatptakow.ct8.pl?zlogo=logo");
  } 
    
    if (!$count == 1){
    echo "<h1> Błędne dane logowania</h1>";
  
    header("location: https://swiatptakow.ct8.pl?blednedane=blad");
 }
?>
</body>

</html>


















