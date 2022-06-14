<?PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$host = "localhost";  
$username = "root"; 
$password = "";
$database = "tontinemarichou_db";


$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$adresse = $_POST["adresse"];
$numero = $_POST["numero"];
$motdepasse = $_POST["motdepasse"];


if (!isset($prenom)) {
        die("s'il vous plaît entrez votre prenom");
    }
    if (!isset($nom)){
      die("S'il vous plaît entrez votre nom");
    }
    if (!isset($adresse)){
      die("S'il vous plaît entrez votre adresse");
    }
    if (!isset($numero)){
      die("S'il vous plaît entrez votre adresse numero");
    }
    if (!isset($motdepasse)){
      die("S'il vous plaît entrez votre motdepasse");
    }

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    } else{
      echo "connexion réussie";
    }
    $statement = $mysqli->prepare("INSERT INTO membre (prenom, nom, adresse, numero, motdepasse) VALUES('$prenom', '$nom', '$adresse', '$numero', '$motdepasse')");
    if($statement->execute()){
          print "Salut ". $prenom . $nom . $adresse . $motdepasse ."!, votre numero est ". $numero;
        }else{
          print $mysqli->error; 
        } 
      }

?>
