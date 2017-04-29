<?php


class ImageExcursion {

    private $idImageExcursion;
    private $imageExcursion;
    private $excursion;
    
    function ImageExcursion($idImageExcursion, $imageExcursion, $excursion) {
        $this->idImageExcursion = $idImageExcursion;
        $this->imageExcursion = $imageExcursion;
        $this->excursion = $excursion;
    }

    function getIdImageExcursion() {
        return $this->idImageExcursion;
    }

    function getImageExcursion() {
        return $this->imageExcursion;
    }

    function getExcursion() {
        return $this->excursion;
    }

    function setIdImageExcursion($idImageExcursion) {
        $this->idImageExcursion = $idImageExcursion;
    }

    function setImageExcursion($imageExcursion) {
        $this->imageExcursion = $imageExcursion;
    }

    function setExcursion($excursion) {
        $this->excursion = $excursion;
    }


    
}
