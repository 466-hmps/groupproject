<?php 
$title = "Products";
include '../partials/header.php';
include '../partials/nav.php'; 
include '../Model/dbstarter.php';
include '../Model/dbhandler.php';
$products = AllProducts();
$count = count($products);
echo "    <h1>Products</h1>\n";
for($i=0; $i<$count; $i=$i+2) {
    echo "    <div class=\"row\">\n";
    for($j=0; $j<=1; $j++)
    {
        echo <<<HTML
            <div class="column">
                <h2>{$products[$i+$j]['ProdType']} \${$products[$i+$j]['Price']} per {$products[$i+$j]['Weight']} lb(s)</h2>
                <img width="150" height="150" src="img/{$products[$i+$j]['ProdType']}.jpg" alt="{$products[$i+$j]['ProdType']} Products."><br>
                <p>
                    {$products[$i+$j]['Description']}
                </p>
                <form>
                    <input type="hidden" name="prodid" value="{$products[$i+$j]['ProdID']}">
                    <label for="amount">QTY</label>
                    <input type='number' name='amount' value='QTY of item' />
                    <input type='submit' name='add' value='Add to cart' />
                </form>
            </div>
        HTML;
    
        if(!isset($products[$i+1])) break;
    }
    echo "    </div>\n";
}

 include '../partials/footer.php'; ?>


