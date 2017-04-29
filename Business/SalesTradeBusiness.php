<?php

include '../data/SalesTradeData.php';

class SalesTradeBusiness {

    private $salesTradeData;
    
    function SalesTradeBusiness() {
        $this->salesTradeData = new SalesTradeData();
    }

    public function insertTBSalesTrade($salesTrade) {
        return $this->salesTradeData->insertTBSalesTrade($salesTrade);
    }

    public function updateTBSalesTrade($salesTrade) {
        return $this->salesTradeData->updateTBSalesTrade($salesTrade);
    }

    public function deleteTBSalesTrade($idSalesTrade) {
        return $this->salesTradeData->deleteTBSalesTrade($idSalesTrade);
    }

    public function getAllTBSalesTrade() {
        return $this->salesTradeData->getAllTBSalesTrade();
    }
    
}
