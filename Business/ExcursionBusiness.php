<?php

include '../data/ExcursionData.php';

class ExcursionBusiness {

    private $excursionData;
    
    function ExcursionBusiness() {
        $this->excursionData = new ExcursionData();
    }

    public function insertTBExcursion($excursion) {
        return $this->excursionData->insertTBExcursion($excursion);
    }

    public function updateTBExcursion($excursion) {
        return $this->excursionData->updateTBExcursion($excursion);
    }

    public function deleteTBExcursion($idExcursion) {
        return $this->excursionData->deleteTBExcursion($idExcursion);
    }

    public function getAllTBExcursion() {
        return $this->excursionData->getAllTBExcursion();
    }
    
}
