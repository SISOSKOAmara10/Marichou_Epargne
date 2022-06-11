<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Liste des bénéficiaires</title>
	<link rel="stylesheet" href="ListebeneficiaireMembres.css">
	<script src=""></script>
</head>
<body>

 <div class="container-fluid">
    <div class="row" id="tete">

    <div class="col-md-1">
        <img src="asset/img/LOGO.PNG" width="80%" style="margin: 10%;">
    </div>
        <div class="col-md-10" style="text-align:center; font-weight: bold;">
            <h1>Epargne 1</h1>
        </div>
        <div class="col-md-1">
          <a href="accueil_Admin.html"><button id="buttonretour">Retour</button></a>
        </div>

    </div>
    <br>
<h2>Liste des bénéficiaires</h2>
<div class="row">
    <div class="col-md-12">
<table>
    <tr>
        <th>Date</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Numéro</th>
        <th>Adresse</th>
        <th>Montant</th>        
        <th>Etat</th>        
    </tr>
    <tbody>
<?php                   
                   require_once("connexion.php");
                   $req="select * from transfert";
                   $ps=$pdo->prepare($req);
                   $ps->execute();
                   
                   ?>
                   
                   <?php while ($et=$ps->fetch()) {?>
                   
                   <tr>
                       <td><?php echo ($et['date'])?></td>
                       <td><?php echo ($et['nom'])?></td>
                       <td><?php echo ($et['prenom'])?></td>
                       <td><?php echo ($et['numero'])?></td>
                       <td><?php echo ($et['adresse'])?></td>
                       <td><?php echo ($et['montant_transfert'])?></td>
                       <td><?php echo ($et['etat'])?></td>
                   <tr>
                   <?php }?>

</tbody>
</table>
</div>
</div>

</div>
</body>
</html>