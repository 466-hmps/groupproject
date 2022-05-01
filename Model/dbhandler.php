<?php
//	Group 17 - Phelps, Marrougi, Stannek, Hiltenbrand
//	CSCI 466 - Professor Lehuta
//	Group project - Web based store
//	Due 5-5-22
//	dbwork.php - a set of functions that accesses and manipulates or serves data from the database.

/** Product Functions: 
 * AllProducts - selects all products from the product table and serves it to the page requesting it.
 * AddProduct - Takes in product info and inserts it into the product table as a row.
 * ModifyProductTitle - Takes in a product ID and modification info and modifies the selected row.
 * ModifyProductWeight - Takes in a product ID and modification info and modifies the selected row.
 * ModifyProductPrice - Takes in a product ID and modification info and modifies the selected row.
 * ModifyProductQty - Takes in a product ID and modification info and modifies the selected row.
 * RemoveProduct - Takes in a product ID and removes the row from the table.
 * Documentation will be provided where necessary line by line or in a comment block when necessary.
*/
function AllProducts() {
	global $pdo;
	$query = 'SELECT * FROM PRODUCT;';
    $statement = $pdo->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
	return $results;
}

function AddProduct($ProdID, $Title, $Weight, $Price, $qty) {
	global $pdo;
	$query = 'INSERT INTO PRODUCT (ProdID, Title, Weight, Price, QTY) VALUES (:pid, :title, :wght, :price, :qty);';
    $statement = $pdo->prepare($query);
	$statement->bindValue(':pid', $ProdID);
	$statement->bindValue(':title', $Title);
	$statement->bindValue(':wght', $Weight);
	$statement->bindValue(':price',$Price);
	$statement->bindValue(':qty',$qty);
	$statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
}

function ModifyProductTitle($ProdID, $Title) {
	global $pdo;
	$query = 'UPDATE PRODUCT SET Title = :title WHERE ProdID = :pid ;';
    $statement = $pdo->prepare($query);
	$statement->bindValue(':pid', $ProdID);
	$statement->bindValue(':title', $Title);
	$statement->execute();
    $statement->closeCursor();
}

function ModifyProductWeight($ProdID, $Weight) {
	global $pdo;
	$query = 'UPDATE PRODUCT SET Weight = :wght WHERE ProdID = :pid ;';
    $statement = $pdo->prepare($query);
	$statement->bindValue(':pid', $ProdID);
	$statement->bindValue(':wght', $Weight);
	$statement->execute();
    $statement->closeCursor();
}

function ModifyProductPrice($ProdID, $Price) {
	global $pdo;
	$query = 'UPDATE PRODUCT SET Price = :price WHERE ProdID = :pid ;';
    $statement = $pdo->prepare($query);
	$statement->bindValue(':pid', $ProdID);
	$statement->bindValue(':price', $Price);
	$statement->execute();
    $statement->closeCursor();
}
function ModifyProductQty($ProdID, $Qty) {
	global $pdo;
	$query = 'UPDATE PRODUCT SET Qty = :qty WHERE ProdID = :pid ;';
    $statement = $pdo->prepare($query);
	$statement->bindValue(':pid', $ProdID);
	$statement->bindValue(':qty', $Qty);
	$statement->execute();
    $statement->closeCursor();
}

function RemoveProduct($ProdID) {
	global $pdo;
	$query = 'DELETE FROM PRODUCT WHERE ProdID = :prod ;';
	$statement = $pdo->prepare($query);
	$statement->bindValue(':prod',$ProdID);
	$statement->execute();
	$statement->closeCursor();
}

/** Cart Functions:
 * AddToCart - takes in a product ID and a number and inserts a row to the table detailing the product and a qty with the customer's details as well.
 * ModfiyCartQty - takes in cart info and modifies the selected row for qty.
 * RMFromCart - takes in a product ID and the customer's info, and removes the identified row from the table.
 * ShowCart - takes in the customer info, and returns the resulting rows to the requesting page.
 * ClearCart - takes in the custimer info, and clears all rows from their cart.
 * Documentation will be provided where necessary line by line or in a comment block when necessary.
 */
function AddToCart($Email, $ProdID, $Amt) {
	global $pdo;
	$query = 'INSERT INTO CART (Email, ProdID, Amt) VALUES (:eml, :pid, :amt);';
    $statement = $pdo->prepare($query);
	$statement->bindValue(':eml', $Email);
	$statement->bindValue(':pid', $ProdID);
	$statement->bindValue(':amt', $Amt);
	$statement->execute();
    $statement->closeCursor();
}

function ModifyCartQty($Email, $ProdID, $Amt) {
	global $pdo;
	$query = 'UPDATE CART SET Amt = :amt WHERE Email = :email AND ProdID = :pid ;';
	$statement = $pdo->prepare($query);
	$statement->bindValue(':email',$Email);
	$statement->bindValue(':amt',$Amt);
	$statement->bindValue(':pid',$ProdID);
	$statement->execute();
	$statement->closeCursor();
}

function RMFromCart($Email, $ProdID) {
	global $pdo;
	$query = 'DELETE FROM CART WHERE ProdID = :prod AND Email = :email ;';
	$statement = $pdo->prepare($query);
	$statement->bindValue(':prod',$ProdID);
	$statement->bindValue(':email',$Email);
	$statement->execute();
	$statement->closeCursor();
}

function ShowCart($Email) {
	global $pdo;
	$query = 'SELECT * FROM CART WHERE Email = :email ;';
	$statement = $pdo->prepare($query);
	$statement->bindValue(':email',$Email);
	$statement->execute();
	$results = $statement->fetchAll();
	$statement->closeCursor();
	return $results;
}

function ClearCart($Email, $ProdID) {
	global $pdo;
	$query = 'DELETE FROM CART WHERE Email = :email ;';
	$statement = $pdo->prepare($query);
	$statement->bindValue(':email',$Email);
	$statement->execute();
	$statement->closeCursor();
}

/** Order Functions:
 * CreateOrder - Creates an orderID and inserts the first product into the table with the product ID and user info
 * ModifyOrder - 
 * ShowOrder - 
 */
function CreateOrder($Email, $ProdID/*, $OrderID*/, $Amt, $Processed, $Shipped){
	//
}

function ModifyOrder() {
	//
}

function ShowOrder() {
	//
}

/** User Functions:
 * 
 */
?>