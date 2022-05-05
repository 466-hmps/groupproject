<?php
require_once '../lib/session.php';
$params = session_get_cookie_params();
setcookie(session_name(), '', time(),
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
);
setcookie(session_name(), '', time());
session_destroy();

header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/');
?>
