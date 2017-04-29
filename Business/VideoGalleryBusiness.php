<?php

include '../data/VideoGalleryData.php';

class VideoGalleryBusiness {

    private $videoGalleryData;
    
    function VideoGalleryBusiness() {
        $this->videoGalleryData = new VideoGalleryData();
    }

    public function insertTBVideoGallery($videoGallery) {
        return $this->videoGalleryData->insertTBVideoGallery($videoGallery);
    }

    public function updateTBVideoGallery($videoGallery) {
        return $this->videoGalleryData->updateTBVideoGallery($videoGallery);
    }

    public function deleteTBVideoGallery($idVideoGallery) {
        return $this->videoGalleryData->deleteTBVideoGallery($idVideoGallery);
    }

    public function getAllTBVideoGallery() {
        return $this->videoGalleryData->getAllTBVideoGallery();
    }
    
}
