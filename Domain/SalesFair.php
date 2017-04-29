<?php

class SalesFair {

    private $idSalesFair;
    private $nameSalesFair;
    private $locationSalesFair;
    private $horarySalesFair;
    private $imageSalesFair;
    
    function SalesFair($idSalesFair, $nameSalesFair, $locationSalesFair, 
            $horarySalesFair, $imageSalesFair) {
        $this->idSalesFair = $idSalesFair;
        $this->nameSalesFair = $nameSalesFair;
        $this->locationSalesFair = $locationSalesFair;
        $this->horarySalesFair = $horarySalesFair;
        $this->imageSalesFair = $imageSalesFair;
    }

    function getIdSalesFair() {
        return $this->idSalesFair;
    }

    function getNameSalesFair() {
        return $this->nameSalesFair;
    }

    function getLocationSalesFair() {
        return $this->locationSalesFair;
    }

    function getHorarySalesFair() {
        return $this->horarySalesFair;
    }

    function getImageSalesFair() {
        return $this->imageSalesFair;
    }

    function setIdSalesFair($idSalesFair) {
        $this->idSalesFair = $idSalesFair;
    }

    function setNameSalesFair($nameSalesFair) {
        $this->nameSalesFair = $nameSalesFair;
    }

    function setLocationSalesFair($locationSalesFair) {
        $this->locationSalesFair = $locationSalesFair;
    }

    function setHorarySalesFair($horarySalesFair) {
        $this->horarySalesFair = $horarySalesFair;
    }

    function setImageSalesFair($imageSalesFair) {
        $this->imageSalesFair = $imageSalesFair;
    }


    
}
