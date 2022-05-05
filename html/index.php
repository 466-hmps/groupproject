<?php 
require_once '../lib/session.php';
$title = "Home";
include '../partials/header.php';
include '../partials/nav.php'; 
?>
    <p>As a humble group of butchers, we seek to deliver only the finest of meats to satisfy true carnal appetite. </p>
    <?php
    if(isset($_SESSION['userid']))
        {
            $wah = getUserType($_SESSION['userid']);
            echo "UserType = " . $wah['Email'];
        }
    ?>
<?php include '../partials/footer.php'; ?>
