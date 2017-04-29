<?php

include '../data/ImageGalleryData.php';

class ImageGalleryBusiness {

    private $imageGalleryData;
    
    function ImageGalleryBusiness() {
        $this->imageGalleryData = new ImageGalleryData();
    }

    public function insertTBImageGallery($imageGallery) {
        return $this->imageGalleryData->insertTBImageGallery($imageGallery);
    }

    public function updateTBImageGallery($imageGallery) {
        return $this->imageGalleryData->updateTBImageGallery($imageGallery);
    }

    public function deleteTBImageGallery($idImageGallery) {
        return $this->imageGalleryData->deleteTBImageGallery($idImageGallery);
    }

    public function getAllTBImageGallery() {
        return $this->imageGalleryData->getAllTBImageGallery();
    }
    
}
