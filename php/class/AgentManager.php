<?php

class AgentManager{
    private $db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db){
        $this->db = $db;
    }

    public function getAll(){
        $sql = $this->db->prepare("SELECT * FROM agents");
        $sql->execute();
        $donnees = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($donnees as $agent){
            $agents[] = new Agent($agent);
        }
        return $agents;
    }

    public function getById(int $id){
        $sql = $this->db->prepare("SELECT * FROM agents WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();
        $donnees = $sql->fetch(PDO::FETCH_ASSOC);
        $agent = new Agent($donnees);
        return $agent;
    }

    public function create(string $nom, string $role, string $biographie, string $image, int $attaque, int $defense){
        $sql = $this->db->prepare("INSERT INTO agents VALUES(NULL, :nom, :role, :biographie, :image, :attaque, :defense, 0, 0)");
        $sql->bindValue(':nom',$nom);
        $sql->bindValue(':role',$role);
        $sql->bindValue(':biographie',$biographie);
        $sql->bindValue(':image',$image);
        $sql->bindValue(':attaque',$attaque);
        $sql->bindValue(':defense',$defense);
        $sql->execute();
    }

    public function delete(int $id){
        $sql = $this->db->prepare("DELETE FROM agents WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();
    }

    public function updateAgent(int $id, string $nom, string $role, string $biographie, string $image, int $attaque, int $defense){
        $sql = $this->db->prepare("UPDATE agents SET nom=:nom, role=:role, biographie=:biographie, attaque=:attaque, defense=:defense WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':nom',$nom);
        $sql->bindValue(':role',$role);
        $sql->bindValue(':biographie',$biographie);
        $sql->bindValue(':image',$image);
        $sql->bindValue(':attaque',$attaque);
        $sql->bindValue(':defense',$defense);
        $sql->execute();   
    }

    public function updateDuel(int $id, int $victoires, int $defaites){
        $sql = $this->db->prepare("UPDATE agents SET victoires=:victoires, defaites=:defaites WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':victoires',$victoires);
        $sql->bindValue(':defaites',$defaites);
        $sql->execute();   
    }
}
?>