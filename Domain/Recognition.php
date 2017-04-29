<?php

class Recognition {

    private $idRecognition;
    private $nameRecognition;
    private $descriptionRecognition;
    private $imageRecognition;
    
    function Recognition($idRecognition, $nameRecognition, 
            $descriptionRecognition, $imageRecognition) {
        $this->idRecognition = $idRecognition;
        $this->nameRecognition = $nameRecognition;
        $this->descriptionRecognition = $descriptionRecognition;
        $this->imageRecognition = $imageRecognition;
    }

    function getIdRecognition() {
        return $this->idRecognition;
    }

    function getNameRecognition() {
        return $this->nameRecognition;
    }

    function getDescriptionRecognition() {
        return $this->descriptionRecognition;
    }

    function getImageRecognition() {
        return $this->imageRecognition;
    }

    function setIdRecognition($idRecognition) {
        $this->idRecognition = $idRecognition;
    }

    function setNameRecognition($nameRecognition) {
        $this->nameRecognition = $nameRecognition;
    }

    function setDescriptionRecognition($descriptionRecognition) {
        $this->descriptionRecognition = $descriptionRecognition;
    }

    function setImageRecognition($imageRecognition) {
        $this->imageRecognition = $imageRecognition;
    }

}
