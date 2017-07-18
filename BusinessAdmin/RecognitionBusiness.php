<?php

include_once '../DataAdmin/RecognitionData.php';

class RecognitionBusiness {

    private $recognitionData;
    
    function RecognitionBusiness() {
        $this->recognitionData = new RecognitionData();
    }

    public function insertTBRecognition($recognition) {
        return $this->recognitionData->insertTBRecognition($recognition);
    }

    public function updateTBRecognition($recognition) {
        return $this->recognitionData->updateTBRecognition($recognition);
    }

    public function deleteTBRecognition($idRecognition) {
        return $this->recognitionData->deleteTBRecognition($idRecognition);
    }

    public function getAllTBRecognition() {
        return $this->recognitionData->getAllTBRecognition();
    }
    
}
