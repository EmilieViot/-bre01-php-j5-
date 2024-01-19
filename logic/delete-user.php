<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

require "../config/connexion.php";

$query = $db->prepare("DELETE FROM users WHERE id = :id");
$parameters = [
    "id" => $id
    ];

$query-> execute($parameters);

header('Location: https://emilieviot.sites.3wa.io/php/-bre01-php-j5-/index.php');
exit;


?>