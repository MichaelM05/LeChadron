<?php

class SalesTrade {

    private $idSalesTrade;
    private $nameSalesTrade;
    private $imagePathSalesTrade;
    
    function SalesTrade($idSalesTrade, $nameSalesTrade, $imagePathSalesTrade) {
        $this->idSalesTrade = $idSalesTrade;
        $this->nameSalesTrade = $nameSalesTrade;
        $this->imagePathSalesTrade = $imagePathSalesTrade;
    }

    function getIdSalesTrade() {
        return $this->idSalesTrade;
    }

    function getNameSalesTrade() {
        return $this->nameSalesTrade;
    }

    function getImagePathSalesTrade() {
        return $this->imagePathSalesTrade;
    }

    function setIdSalesTrade($idSalesTrade) {
        $this->idSalesTrade = $idSalesTrade;
    }

    function setNameSalesTrade($nameSalesTrade) {
        $this->nameSalesTrade = $nameSalesTrade;
    }

    function setImagePathSalesTrade($imagePathSalesTrade) {
        $this->imagePathSalesTrade = $imagePathSalesTrade;
    }


    
}
