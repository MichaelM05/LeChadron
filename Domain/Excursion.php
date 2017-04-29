<?php

class Excursion {

    private $idExcursion;
    private $nameExcursion;
    private $descriptionExcursion;
    
    function Excursion($idExcursion, $nameExcursion, $descriptionExcursion) {
        $this->idExcursion = $idExcursion;
        $this->nameExcursion = $nameExcursion;
        $this->descriptionExcursion = $descriptionExcursion;
    }

    function getIdExcursion() {
        return $this->idExcursion;
    }

    function getNameExcursion() {
        return $this->nameExcursion;
    }

    function getDescriptionExcursion() {
        return $this->descriptionExcursion;
    }

    function setIdExcursion($idExcursion) {
        $this->idExcursion = $idExcursion;
    }

    function setNameExcursion($nameExcursion) {
        $this->nameExcursion = $nameExcursion;
    }

    function setDescriptionExcursion($descriptionExcursion) {
        $this->descriptionExcursion = $descriptionExcursion;
    }


    
}
