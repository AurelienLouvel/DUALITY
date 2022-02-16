<?php

class Agent{
    protected $id;
    protected $name;
    protected $role;
    protected $biographie;
    protected $image;
    protected $attaque;
    protected $defense;
    protected $victoires;
    protected $defaites;
    protected $pv=150;
    const MINLIFE = 0;

    public function __construct(array $donnees){
        return $this->hydrate($donnees);
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
            $this->$method($value);
            }
        }
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNom(){
        return $this->name;
    }
    public function setNom($name){
        $this->name = $name;
    }

    public function getRole(){
        return $this->role;
    }
    public function setRole($role){
        $this->role = $role;
    }

    public function getBiographie(){
        return $this->biographie;
    }
    public function setBiographie($biographie){
        $this->biographie = $biographie;
    }
    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image = $image;
    }

    public function getAttaque(){
        return $this->attaque;
    }
    public function setAttaque($attaque){
        $this->attaque = $attaque;
    }

    public function getDefense(){
        return $this->defense;
    }
    public function setDefense($defense){
        $this->defense = $defense;
    }

    public function getVictoires(){
        return $this->victoires;
    }
    public function setVictoires($victoires){
        $this->victoires += $victoires;
    }
    
    public function getDefaites(){
        return $this->defaites;
    }
    public function setDefaites($defaites){
        $this->defaites += $defaites;
    }

    public function getPv(){
        return $this->pv;
    }
    public function setPv($pv){
        if($pv<=self::MINLIFE){
            $this->pv = self::MINLIFE;
        }
        else{
            $this->pv=$pv;
        }
    }

    public function isAlive(){
        return $this->pv > self::MINLIFE;
    }

    public function attaque(Agent $cible){
        $random = random_int(20, 40);
        $cible->setPv($cible->pv-$random-($this->attaque/10)+($cible->defense/10));
    }

}

?>