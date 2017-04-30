<?php

include_once './Data/PhoneData.php';

class PhoneBusiness {

    private $phoneData;
    
    function PhoneBusiness() {
        $this->phoneData = new PhoneData();
    }

    public function insertTBPhone($phone) {
        return $this->phoneData->insertTBPhone($phone);
    }

    public function updateTBPhone($phone) {
        return $this->phoneData->updateTBPhone($phone);
    }

    public function deleteTBPhone($idPhone) {
        return $this->phoneData->deleteTBPhone($idPhone);
    }

    public function getAllTBPhone() {
        return $this->phoneData->getAllTBPhone();
    }
    
}
