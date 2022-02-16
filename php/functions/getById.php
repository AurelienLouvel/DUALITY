<?php
require '../init.php';
$donnees = $manager->getById(htmlspecialchars($_GET["id"]));
$agent["id"] = $donnees->getId();
$agent["nom"] = $donnees->getNom();
$agent["role"] = $donnees->getRole();
$agent["biographie"] = $donnees->getBiographie();
$agent["image"] = $donnees->getImage();
$agent["attaque"] = $donnees->getAttaque();
$agent["defense"] = $donnees->getDefense();
$agent["pv"] = $donnees->getPv();
echo json_encode($agent);
?>