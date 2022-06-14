<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome sur votre page<?php echo $login_session; ?></h1> 
      <h2><a href = "deconnection.php">Sign Out</a></h2>
   </body>
   
</html>