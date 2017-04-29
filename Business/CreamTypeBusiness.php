<?php

include '../data/CreamTypeData.php';

class CreamTypeBusiness {

    private $creamTypeData;
    
    function CreamTypeBusiness() {
        $this->creamTypeData = new CreamTypeData();
    }

    public function insertTBCreamType($creamType) {
        return $this->creamTypeData->insertTBCreamType($creamType);
    }

    public function updateTBCreamType($creamType) {
        return $this->creamTypeData->updateTBCreamType($creamType);
    }

    public function deleteTBCreamType($idCreamType) {
        return $this->creamTypeData->deleteTBCreamType($idCreamType);
    }

    public function getAllTBCreamType() {
        return $this->creamTypeData->getAllTBCreamType();
    }
    
}
