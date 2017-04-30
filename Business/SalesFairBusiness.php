<?php

include_once './Data/SalesFairData.php';

class SalesFairBusiness {

    private $salesFairData;
    
    function SalesFairBusiness() {
        $this->salesFairData = new SalesFairData();
    }

    public function insertTBSalesFair($salesFair) {
        return $this->salesFairData->insertTBSalesFair($salesFair);
    }

    public function updateTBSalesFair($salesFair) {
        return $this->salesFairData->updateTBSalesFair($salesFair);
    }

    public function deleteTBSalesFair($idSalesFair) {
        return $this->salesFairData->deleteTBSalesFair($idSalesFair);
    }

    public function getAllTBSalesFair() {
        return $this->salesFairData->getAllTBSalesFair();
    }
    
}
