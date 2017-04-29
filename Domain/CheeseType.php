<?php

class CheeseType {

    private $idCheeseType;
    private $cheeseType;
    
    function CheeseType($idCheeseType, $cheeseType) {
        $this->idCheeseType = $idCheeseType;
        $this->cheeseType = $cheeseType;
    }

    function getIdCheeseType() {
        return $this->idCheeseType;
    }

    function getCheeseType() {
        return $this->cheeseType;
    }

    function setIdCheeseType($idCheeseType) {
        $this->idCheeseType = $idCheeseType;
    }

    function setCheeseType($cheeseType) {
        $this->cheeseType = $cheeseType;
    }
    
}
