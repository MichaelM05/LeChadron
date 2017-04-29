<?php

class ImageProduct {

    private $idImageProduct;
    private $pathImageProduct;
    private $product;
    
    function ImageProduct($idImageProduct, $pathImageProduct, $product) {
        $this->idImageProduct = $idImageProduct;
        $this->pathImageProduct = $pathImageProduct;
        $this->product = $product;
    }

    function getIdImageProduct() {
        return $this->idImageProduct;
    }

    function getPathImageProduct() {
        return $this->pathImageProduct;
    }

    function getProduct() {
        return $this->product;
    }

    function setIdImageProduct($idImageProduct) {
        $this->idImageProduct = $idImageProduct;
    }

    function setPathImageProduct($pathImageProduct) {
        $this->pathImageProduct = $pathImageProduct;
    }

    function setProduct($product) {
        $this->product = $product;
    }


    
}
