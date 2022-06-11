<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Liste des tontines</title>
	<link rel="stylesheet" href="listetontines.css">
	<script src=""></script>
</head>
<body style="background-color:#ECA1DF ;">

 <div class="container-fluid">
    <div class="row" id="tete">

    <div class="col-md-1">
        <img src="asset/img/LOGO.PNG" width="80%" style="margin: 10%;">
    </div>
        <div class="col-md-10" style="text-align:center; font-weight: bold;">
            <h1>Epargne 1</h1>
        </div>
        <div class="col-md-1">
          <a href="accueilmembre.php"><button style="margin-top: 10px ;">Retour</button></a>
        </div>
    </div>

<h2>Bienvenue dans l’espace des tontines choisisez une pour voir plus des details</h2>
<hr>
<?php
                   
                   require_once("connexion.php");
                   $req="select * from tontine";
                   $ps=$pdo->prepare($req);
                   $ps->execute();
                   
                   ?>
                   
                   <?php while ($et=$ps->fetch()) {?>
                   
                  
                   
<form><a href="Liste des membres.html" style="text-decoration:none ;color:black">
    <h3><th><?php echo ($et['nom_tontine'])?></th></h3>
    <div class="debut">Début: <?php echo ($et['date_debut'])?></div>
    <div class="fin">Fin: <?php echo ($et['date_fin'])?></div><br>
    <div class="cotisation">Cotisation: <?php echo ($et['montant'])?> F</div>
    <div class="solde">Solde: <?php echo ($et['solde'])?> F</div><br></a>
</form>
<br>
                   <?php }?>


</div>
</body>
</html>