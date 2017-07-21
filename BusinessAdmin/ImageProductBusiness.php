<?php

include_once '../DataAdmin/ImageProductData.php';

class ImageProductBusiness {

    private $imageProductData;
    
    function ImageProductBusiness() {
        $this->imageProductData = new ImageProductData();
    }

    public function insertTBImageProduct($imageProduct) {
        return $this->imageProductData->insertTBImageProduct($imageProduct);
    }

    public function updateTBImageProduct($imageProduct) {
        return $this->imageProductData->updateTBImageProduct($imageProduct);
    }

    public function deleteTBImageProduct($idImageProduct) {
        return $this->imageProductData->deleteTBImageProduct($idImageProduct);
    }

    public function getAllTBImageProduct() {
        return $this->imageProductData->getAllTBImageProduct();
    }
    
    public function getImageByProduct($product) {
        return $this->imageProductData->getImageByProduct($product);
    }
    
}
