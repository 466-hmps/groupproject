<?php
//	Group 17 - Phelps, Marrougi, Stannek, Hiltenbrand
//	CSCI 466 - Professor Lehuta
//	Group project - Web based store
//	Due 5-5-22
//	dbwork.php - a set of functions that accesses and manipulates or serves data from the database.

function AllProducts() {
	global $pdo;
	$query = 'SELECT * FROM P;';
    $statement = $pdo->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
	return $results;
}

function GenreProducts() {
	global $pdo;
	$query = 'SELECT * FROM P;';
    $statement = $pdo->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
	return $results;
}

function ProductFinder($PID) {
	global $pdo;
    $query = 'SELECT * FROM P
              WHERE P = :p ;';
    $statement = $pdo->prepare($query);
    $statement ->bindValue(':p',$PID);
    $statement->execute();
    $record = $statement->fetchAll();
    $statement->closeCursor();
    return $record;
}

?>