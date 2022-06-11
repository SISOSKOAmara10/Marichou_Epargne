 <!-- <?php
$connection = mysqli_connect("localhost", "root","");
$db = mysqli_select_db($connection, 'phpcrud');

if (isset($_POST['deletedata']))
 {
    $id =$_POST['delete_id'];
    $query = "DELETE FROM tontine WHERE id=?";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    echo'<script> alert("Donné effacé"); </script>';
    header("Location:Gerertontine.php");
} 
else {
    echo '<script> alert("erreure de Suppression"); </script>';
}

?>  --> -->


 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marichou_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM tontine WHERE id=$id";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> --> -->