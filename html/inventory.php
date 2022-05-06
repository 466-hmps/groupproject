<?php 
require_once '../lib/session.php';
$title = "Checkout";
include '../partials/header.php';
include '../partials/nav.php'; 
include '../lib/library.php';

draw_inv(AllProducts());

echo "<form action='inventory.php' method='POST'>";
echo "<label for'products'>Add to: </label>";
echo "<select name='Products' id='Products'>";
echo "<option value='1'>Ground Beef</option>
    <option value='2'>Pork Chops</option>
    <option value='3'>Chicken Breasts</option>
    <option value='4'>Ground Turkey</option>
    <option value='5'>Salmon Filet</option>";
echo "<input type='number' name='QTY' value='QTY'>";
echo "<input type='submit' name='add' value='Add to Inventory' />";
echo "</form>";

if(isset($_POST['add'])){
    ModifyProductQty($_POST['Products'], $_POST['QTY']);
}
?>



<?php include '../partials/footer.php'; ?>
