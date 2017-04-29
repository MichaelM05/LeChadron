<?php

class ImageGallery {

    private $idImageGallery;
    private $imageGallery;
    private $imageGalleryDescription;
    
    function ImageGallery($idImageGallery, $imageGallery, $imageGalleryDescription) {
        $this->idImageGallery = $idImageGallery;
        $this->imageGallery = $imageGallery;
        $this->imageGalleryDescription = $imageGalleryDescription;
    }

    function getIdImageGallery() {
        return $this->idImageGallery;
    }

    function getImageGallery() {
        return $this->imageGallery;
    }

    function getImageGalleryDescription() {
        return $this->imageGalleryDescription;
    }

    function setIdImageGallery($idImageGallery) {
        $this->idImageGallery = $idImageGallery;
    }

    function setImageGallery($imageGallery) {
        $this->imageGallery = $imageGallery;
    }

    function setImageGalleryDescription($imageGalleryDescription) {
        $this->imageGalleryDescription = $imageGalleryDescription;
    }


    
}
