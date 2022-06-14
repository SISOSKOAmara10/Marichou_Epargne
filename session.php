<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select numero, motdepasse from membre where numero = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['numero'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:connexion.php");
      die();
   }
?>