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
	//
}

function ModifyProductTitle() {
	//
}

function ModifyProductWeight() {
	//
}

function ModifyProductPrice() {
	//
}
function ModifyProductQty() {
	//
}

function RemoveProduct() {
	//
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
	//
}

function ModifyCartQty($Email, $ProdID, $Amt) {
	//
}

function RMFromCart($Email, $ProdID) {
	//
}

function ShowCart($Email, $ProdID) {
	//
}

function ClearCart($Email, $ProdID) {
	//
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