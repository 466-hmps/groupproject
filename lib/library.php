<?php
function draw_table($rows)
{
    echo "    <table border=1 cellspacing=1>\n";
    echo "        <tr>\n";
    foreach ($rows[0] as $key => $value) {
        echo "            <th>$key</th>\n";
    }
    echo "        </tr>\n";
    foreach ($rows as $row) {
        echo "        <tr>\n";
        foreach ($row as $key => $item) {
            echo "            <td>$item</td>\n";
        }
        echo "        </tr>\n";
    }
    echo "    </table>\n";
}
function dump_table(&$pdo, $table)
{
    draw_table($pdo->query("SELECT * FROM $table;")->fetchAll(PDO::FETCH_ASSOC));
}
function draw_cart($rows)
{
    echo "    <table class='cart'\n";
    echo "        <tr>\n";
    echo "            <th width=100>Picture</th>\n";
    echo "            <th>Title</th>\n";
    echo "            <th>Weight</th>\n";
    echo "            <th>Price</th>\n";
    echo "            <th>Amt</th>\n"; 
    echo "        </tr>\n";
    foreach ($rows as $row) {
        echo "        <tr>\n";
        echo "            <td width=100><img height=100 width=100 src='img/{$row['ProdType']}.jpg'></td>\n";
        echo "            <td>{$row['Title']}</td>\n";
        echo "            <td>{$row['Weight']}</td>\n";
        echo "            <td>{$row['Price']}</td>\n";
        echo "            <td>{$row['Amt']}</td>\n";
        echo "        </tr>\n";
    }
    echo "    </table>\n";
}
?>