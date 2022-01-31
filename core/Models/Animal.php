<?php

namespace Models;




class Animal extends AbstractModel{

    //getter et setter pour les colonnes: name, description

    private $name;
    public function getName(){
        return $this->name;
    }

    public function setName($name){

        $this->name = $name;
    }

    private $description;
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }



    protected string $tableName = "animaux";


}











?>