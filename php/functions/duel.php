<?php
require '../init.php';
$attaquant = $manager->getById(htmlspecialchars($_POST["attaquant"]));
$defenseur = $manager->getById(htmlspecialchars($_POST["defenseur"]));

while($attaquant->isAlive() && $defenseur->isAlive()){
    $avantage = random_int(0,1);
    if($avantage==0){
        $attaquant->attaque($defenseur);
    }
    else if($avantage==1){
        $defenseur->attaque($attaquant);
    }
}

if($attaquant->isAlive()){
    $attaquant->setVictoires(1);
    $result["gagnant"] = "attaquant";
    $result["pv_gagnant"] = round($attaquant->getPv());
    $defenseur->setDefaites(1);
    $result["perdant"] = "defenseur";
    $result["pv_perdant"] = $defenseur->getPv();
}
else if($defenseur->isAlive()){
    $defenseur->setVictoires(1);
    $result["gagnant"] = "defenseur";
    $result["pv_gagnant"] = round($defenseur->getPv());
    $attaquant->setDefaites(1);
    $result["perdant"] = "attaquant";
    $result["pv_perdant"] = $attaquant->getPv();
}
$manager->updateDuel($attaquant->getId(), $attaquant->getVictoires(), $attaquant->getDefaites());
$manager->updateDuel($defenseur->getId(), $defenseur->getVictoires(), $defenseur->getDefaites());
echo json_encode($result)
?>