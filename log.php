<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js
	"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>conn</title>

</head>
<body>
<?php  
	session_start();
try {
	$strConnection= 'mysql:host=localhost;dbname=tontinemarichou_db';
	$pdo = new PDO ($strConnection,'root','');
	// echo"<button>Retour</button>";
	}
catch (PDOException $e) {
	
$msg = 'ERREUR PDO dans'  . $e->getMessage();
die ($msg);
}
?>

</body>
</html>
