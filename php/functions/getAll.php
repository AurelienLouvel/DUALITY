<?php
require '../init.php';
$donnees = $manager->getAll();
foreach ($donnees as $key=>$agent){
    $agents[$key]["id"] = $agent->getId();
    $agents[$key]["nom"] = $agent->getNom();
    $agents[$key]["role"] = $agent->getRole();
    $agents[$key]["biographie"] = $agent->getBiographie();
    $agents[$key]["image"] = $agent->getImage();
    $agents[$key]["attaque"] = $agent->getAttaque();
    $agents[$key]["defense"] = $agent->getDefense();
    $agents[$key]["victoires"] = $agent->getVictoires();
    $agents[$key]["defaites"] = $agent->getDefaites();
    if ($agent->getVictoires()!=0 && $agent->getDefaites()!=0){
        $agents[$key]["ratio"] = round(($agent->getVictoires()/$agent->getDefaites()),2);
    }
    else{
        $agents[$key]["ratio"] = 0;
    }
}
echo json_encode($agents);
?>