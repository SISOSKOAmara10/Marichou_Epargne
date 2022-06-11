<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adhérer tontines</title>
	<link rel="stylesheet" href="gererTontineAdmin.css">
	<script src=""></script>
</head>
<body>

 <div class="container-fluid">
    <div class="row" id="tete">

    <div class="col-md-1">
        <img src="asset/img/LOGO.PNG" width="100%" style="margin: 10%;">
    </div>
        <div class="col-md-10" style="text-align:center; font-weight: bold;">
            <h1>Liste des tontines</h1>
        </div>
        <div class="col-md-1">
          <a href="accueil_Admin.html"><button id="buttonretour">Retour</button></a>
        </div>
    </div>
    
    <br>
<table row="20" cols="10">
    <!-- <thead> -->
    <tr>
       <a  href="Listecotisation.php" ><th>Nom de la tontine</th></a>
        <th>Début</th>
        <th>Fin</th>
        <th>Montant</th>
        <th>Nombre des personnes</th>
        <th>Solde</th>
    </tr>
<!-- </thead> -->
<tbody>
<?php
                   
                   require_once("connexion.php");
                   $req="select * from tontine";
                   $ps=$pdo->prepare($req);
                   $ps->execute();
                   
                   ?>
                   
                   <?php while ($et=$ps->fetch()) {?>
                   
                   <tr>
                       <!-- <td><?php echo ($et['id_tontine'])?></td> -->
                       <td><?php echo ($et['nom_tontine'])?></td>
                       <td><?php echo ($et['date_debut'])?></td>
                       <td><?php echo ($et['date_fin'])?></td>
                       <td><?php echo ($et['montant'])?></td>
                       <td><?php echo ($et['nombre_perso'])?></td>
                       <td><?php echo ($et['solde'])?></td>
                       
                       <!-- <td><a href="detailClient.html"><img src="../img/InfoCircle.png" alt=""></a></td>
                        -->
                   <tr>
                   <?php }?>
                   <!-- <td class="sansfond"><a href="supprimer1.php?NumTontine=<?=$nom_tontine['id_tontine'] ?>"><button id="suppr">Supprimer</button></a></td> -->
</tbody>
   
    
</table>

</div>
</body>
</html>