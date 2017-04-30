<?php

include_once '../Data/ExcursionReservationData.php';

class ExcursionReservationBusiness {

    private $excursionReservationData;
    
    function ExcursionReservationBusiness() {
        $this->excursionReservationData = new ExcursionReservationData();
    }

    public function insertTBExcursionReservation($excursionReservation) {
        return $this->excursionReservationData->insertTBExcursionReservation($excursionReservation);
    }

    public function updateTBExcursionReservation($excursionReservation) {
        return $this->excursionReservationData->updateTBExcursionReservation($excursionReservation);
    }

    public function deleteTBExcursionReservation($idExcursionReservation) {
        return $this->excursionReservationData->deleteTBExcursionReservation($idExcursionReservation);
    }

    public function getAllTBExcursionReservation() {
        return $this->excursionReservationData->getAllTBExcursionReservation();
    }
    
}
