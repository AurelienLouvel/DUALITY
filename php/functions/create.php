<?php
require '../init.php';
$manager->create(htmlspecialchars($_POST["nom"]),htmlspecialchars($_POST["role"]),htmlspecialchars($_POST["biographie"]),htmlspecialchars($_POST["image"]),htmlspecialchars($_POST["attaque"]),htmlspecialchars($_POST["defense"]));
?>