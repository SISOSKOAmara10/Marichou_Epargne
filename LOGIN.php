<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $numero = mysqli_real_escape_string($db,$_POST['numero']);
      $motdepasse = mysqli_real_escape_string($db,$_POST['motdepasse']); 
      
      $sql = "SELECT numero, motdepasse FROM membre WHERE numero = '$numero' and motdepasse = '$motdepasse' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $motdepasse = $row['motdepasse'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register["numero"];
         $_SESSION['login_user'] = $numero;
         
         header("location: welcome.php");
      }else {
         $error = "votre numero ou mot de passe incorrect ";
      }
   }
?>