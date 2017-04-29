<?php

class Product {

    private $idProduct;
    private $nameProduct;
    private $descriptionProduct;
    private $creamType;
    private $cheeseType;
    
    function Product($idProduct, $nameProduct, $descriptionProduct, 
            $creamType, $cheeseType) {
        $this->idProduct = $idProduct;
        $this->nameProduct = $nameProduct;
        $this->descriptionProduct = $descriptionProduct;
        $this->creamType = $creamType;
        $this->cheeseType = $cheeseType;
    }

    function getIdProduct() {
        return $this->idProduct;
    }

    function getNameProduct() {
        return $this->nameProduct;
    }

    function getDescriptionProduct() {
        return $this->descriptionProduct;
    }

    function getCreamType() {
        return $this->creamType;
    }

    function getCheeseType() {
        return $this->cheeseType;
    }

    function setIdProduct($idProduct) {
        $this->idProduct = $idProduct;
    }

    function setNameProduct($nameProduct) {
        $this->nameProduct = $nameProduct;
    }

    function setDescriptionProduct($descriptionProduct) {
        $this->descriptionProduct = $descriptionProduct;
    }

    function setCreamType($creamType) {
        $this->creamType = $creamType;
    }

    function setCheeseType($cheeseType) {
        $this->cheeseType = $cheeseType;
    }


    
}
