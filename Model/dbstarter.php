
<?php
global $pdo;
require "../config/secrets.php";
$dsn = "mysql:host=" . $dbhost . ";dbname=" . $dbname;

try {	
	$pdo = new PDO($dsn, $dbusername, $dbpassword);
}

catch (PDOException $e) {
	echo "<p>Connection to database failed: " . $e->getMessage(). "<p>";
}

?>
