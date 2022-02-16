<?php
require '../init.php';
$manager->delete(htmlspecialchars($_GET["id"]));
?>