<?php

include_once './Data/ProductData.php';

class ProductBusiness {

    private $productData;
    
    function ProductBusiness() {
        $this->productData = new ProductData();
    }

    public function insertTBProduct($product) {
        return $this->productData->insertTBProduct($product);
    }

    public function updateTBProduct($product) {
        return $this->productData->updateTBProduct($product);
    }

    public function deleteTBProduct($idProduct) {
        return $this->productData->deleteTBProduct($idProduct);
    }

    public function getAllTBProduct() {
        return $this->productData->getAllTBProduct();
    }
    
}
