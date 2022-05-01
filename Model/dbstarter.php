
<?php
global $pdo;
$username = "z1875567";
$password = "2000Sep22";
$dsn = "mysql:host=courses;dbname=z1875567";

try {	
	$pdo = new PDO($dsn, $username, $password);
}

catch (PDOException $e) {
	echo "<p>Connection to database failed: " . $e->getMessage(). "<p>";
}

?>