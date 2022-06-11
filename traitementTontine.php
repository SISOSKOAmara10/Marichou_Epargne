<?PHP
require_once('connexion.php');

$nom_tontine=$_POST['nom_tontine'];
$date_debut=$_POST['date_debut'];
$date_fin=$_POST['date_fin'];
$montant=$_POST['montant'];
$nombre_perso=$_POST['nombre_perso'];
$solde=$_POST['solde'];


$q=$pdo->prepare('INSERT INTO  tontine (nom_tontine, date_debut, date_fin, montant, nombre_perso, solde)VALUES(?,?,?,?,?,?)');
$params=array($nom_tontine, $date_debut, $date_fin, $montant, $nombre_perso, $solde);
$q ->execute($params);  


?>