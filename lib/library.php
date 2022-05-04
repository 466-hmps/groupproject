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
?>