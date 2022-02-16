<?php
$db = new PDO('mysql:host=localhost;dbname=poo_valorant;port=3306;charset=utf8', 'root','');
function chargerClasse($classe){
    require 'class/'.$classe.'.php';
}
spl_autoload_register('chargerClasse');
$manager = new AgentManager($db);
?>