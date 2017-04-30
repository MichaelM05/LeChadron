<?php

include_once '../Data/ImageExcursionData.php';

class ImageExcursionBusiness {

    private $imageExcursionData;
    
    function ImageExcursionBusiness() {
        $this->imageExcursionData = new ImageExcursionData();
    }

    public function insertTBImageExcursion($imageExcursion) {
        return $this->imageExcursionData->insertTBImageExcursion($imageExcursion);
    }

    public function updateTBImageExcursion($imageExcursion) {
        return $this->imageExcursionData->updateTBImageExcursion($imageExcursion);
    }

    public function deleteTBImageExcursion($idImageExcursion) {
        return $this->imageExcursionData->deleteTBImageExcursion($idImageExcursion);
    }

    public function getAllTBImageExcursion() {
        return $this->imageExcursionData->getAllTBImageExcursion();
    }
    
}
