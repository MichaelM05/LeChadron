<?php

class VideoGallery {

    private $idVideoGallery;
    private $videoGallery;
    private $videoDescription;
    
    function VideoGallery($idVideoGallery, $videoGallery, $videoDescription) {
        $this->idVideoGallery = $idVideoGallery;
        $this->videoGallery = $videoGallery;
        $this->videoDescription = $videoDescription;
    }

    function getIdVideoGallery() {
        return $this->idVideoGallery;
    }

    function getVideoGallery() {
        return $this->videoGallery;
    }

    function getVideoDescription() {
        return $this->videoDescription;
    }

    function setIdVideoGallery($idVideoGallery) {
        $this->idVideoGallery = $idVideoGallery;
    }

    function setVideoGallery($videoGallery) {
        $this->videoGallery = $videoGallery;
    }

    function setVideoDescription($videoDescription) {
        $this->videoDescription = $videoDescription;
    }


}
