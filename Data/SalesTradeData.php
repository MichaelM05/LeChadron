<?php

include_once 'data.php';
include '../Domain/SalesTrade.php';

class SalesTradeData extends Data {

    public function insertTBSalesTrade($salesTrade) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbsalestrade) AS idtbsalestrade  FROM "
                . "tbsalestrade;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbsalestrade VALUES (" . $nextId . ",'" .
                $salesTrade->getNameSalesTrade() . "','" .
                $salesTrade->getImagePathSalesTrade() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBSalesTrade($salesTrade) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbsalestrade SET " . 
                "namesalestrade='" . $salesTrade->getNameSalesTrade() .
                "', imagesalestrade='" . $salesTrade->getImagePathSalesTrade() .
                "' WHERE idtbsalestrade=" . $salesTrade->getIdSalesTrade() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBSalesTrade($idSalesTrade) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbsalestrade where idtbsalestrade=" . 
                $idSalesTrade . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBSalesTrade() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbsalestrade;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $salesTrades = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentSalesTrade = new SalesTrade($row['idtbsalestrade'], 
                    $row['namesalestrade'], 
                    $row['imagesalestrade']);
            array_push($salesTrades, $currentSalesTrade);
        }
        return $salesTrades;
    }
    
}

