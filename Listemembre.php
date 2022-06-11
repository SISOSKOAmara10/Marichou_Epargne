<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Liste des membres</title>
	<link rel="stylesheet" href="listedesmembres.css">
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
          <a href="accueil_Admin.php"><button>Retour</button></a>
       <!-- <a href="accueil.php"><img src="asset/img/Button fermer1.png" width="50px" style="margin: 10%;"></a> -->
        </div>

    </div>
    <br>
<h2>Liste des membres</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Numéro</th>
        <th>Adresse</th>
        <th>Type</th>
        <th>Statut</th>
    </tr>
    <?php
                   
                   require_once("connexion.php");
                   $req="select * from membre";
                   $ps=$pdo->prepare($req);
                   $ps->execute();
                   
                   ?>
                   
                   <?php while ($et=$ps->fetch()) {?>
                   
                   <tr>
                       <td><?php echo ($et['nom'])?></td>
                       <td><?php echo ($et['prenom'])?></td>
                       <td><?php echo ($et['numero'])?></td>
                       <td><?php echo ($et['adresse'])?></td>
                       <td><?php echo ($et['type'])?></td>
                       <td><?php echo ($et['statut'])?></td>
                      
                   <tr>
                   <?php }?>
</table>


</div>
</body>
</html>