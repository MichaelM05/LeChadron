<?php

class CreamType {

    private $idCreamType;
    private $creamType;
    
    function CreamType($idCreamType, $creamType) {
        $this->idCreamType = $idCreamType;
        $this->creamType = $creamType;
    }

    function getIdCreamType() {
        return $this->idCreamType;
    }

    function getCreamType() {
        return $this->creamType;
    }

    function setIdCreamType($idCreamType) {
        $this->idCreamType = $idCreamType;
    }

    function setCreamType($creamType) {
        $this->creamType = $creamType;
    }

    
}
