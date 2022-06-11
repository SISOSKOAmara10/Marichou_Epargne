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
<body style="background-color: #ECA1DF;">

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
    <a href="ajoutertontine.php"><button id="buttonAjout">Ajouter</button></a>
    <br>
<table row="20" cols="10">
    <!-- <thead> -->
    <tr>
        <td>ID Membre</td>
        <th>Nom de la tontine</th>
        <th>Début</th>
        <th>Fin</th>
        <th>Montant</th>
        <th>Nombre des personnes</th>
        <th>Solde</th>
        
      
        <th>Supprimer</th>
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
                      <td> <?php echo ($et['id'])?></td>
                       <td><?php echo ($et['nom_tontine'])?></td>
                       <td><?php echo ($et['date_debut'])?></td>
                       <td><?php echo ($et['date_fin'])?></td>
                       <td><?php echo ($et['montant'])?></td>
                       <td><?php echo ($et['nombre_perso'])?></td>
                       <td><?php echo ($et['solde'])?></td>
                <form action="delete.php" method="POST">
                        <td class="sansfond"><button type="submit" class="btn btn-danger" data-toggle="modal" data-target="delete.php" value="submit">Supprimer</button></td>
                   </form>   
                   <tr>
                   <?php }?>
                  
</table>
<!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                    <div class="modal-content">
                            
                        <div class="modal-header" style="background-color: #ECA1DF; text-align:center">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                                    <h4 class="modal-title">Confirmation</h4>
                        </div>
                            <form action="delete.php" method="POST">   
                                <div class="modal-body" style="text-align: center;">
                                <input type="hidden" name="delete_id" id="delete_id">
                                    <p >Êtes vous sûr de vouloir supprimer cette tontine?</p>
                                </div>
                                <div class="modal-footer" >
                                    <button type="submit" name="deledata" class="btn btn-danger" style="margin-right: 65%">OUI</button>
                                    <button type="button" class="btn btn-info" data-dismiss="modal"  style="margin-right: 10% ;">NON</button>
                                </div>
                            </form>
                    </div>
                 <!-- data-dismiss="modal" -->
            </div>
        </div>

</div>
</body>

</html>
