<?php

include_once './Data/CheeseTypeData.php';

class CheeseTypeBusiness {

    private $cheeseTypeData;
    
    function CheeseTypeBusiness() {
        $this->cheeseTypeData = new CheeseTypeData();
    }

    public function insertTBCheeseType($cheeseType) {
        return $this->cheeseTypeData->insertTBCheeseType($cheeseType);
    }

    public function updateTBCheeseType($cheeseType) {
        return $this->cheeseTypeData->updateTBCheeseType($cheeseType);
    }

    public function deleteTBCheeseType($idCheeseType) {
        return $this->cheeseTypeData->deleteTBCheeseType($idCheeseType);
    }

    public function getAllTBCheeseType() {
        return $this->cheeseTypeData->getAllTBCheeseType();
    }
    
}
