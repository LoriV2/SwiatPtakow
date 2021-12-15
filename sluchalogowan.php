<?php
  session_start();
$_GET['zlogo'];
$_GET['blednedane']; 
 
 if(isset($_GET['zlogo'])){
 
 echo "<script>alert('Pomyślnie zalogowano')</script>";
 };
  
   
  
  if(isset($_GET['blednedane'])){
 
 echo "<script>alert('Błędne dane logowania')</script>";
 }
  
  
  ?>











