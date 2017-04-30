<?php

include_once 'Data.php';
include './Domain/SalesFair.php';

class SalesFairData extends Data {

    public function insertTBSalesFair($salesFair) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbsalesfair) AS idtbsalesfair  FROM tbsalesfair";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbsalesfair VALUES (" . $nextId . ",'" .
                $salesFair->getNameSalesFair() . "','" .
                $salesFair->getLocationSalesFair() . "','" .
                $salesFair->getHorarySalesFair() . "','" .
                $salesFair->getImageSalesFair() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBSalesFair($salesFair) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbsalesfair SET " . 
                "namesalesfair='" . $salesFair->getNameSalesFair() .
                "', locationsalesfair='" . $salesFair->getLocationSalesFair() .
                "', horarysalesfair=" . $salesFair->getHorarySalesFair() .
                ", imagesalesfair=" . $salesFair->getImageSalesFair() .
                " WHERE idtbsalesfair=" . $salesFair->getIdSalesFair() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBSalesFair($idSalesFair) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbsalesfair where idtbsalesfair=" . $idSalesFair . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBSalesFair() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbsalesfair;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $salesFairs = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentSalesFair = new SalesFair($row['idtbsalesfair'], $row['namesalesfair'], 
                    $row['locationsalesfair'], $row['horarysalesfair'], 
                    $row['imagesalesfair']);
            array_push($salesFairs, $currentSalesFair);
        }
        return $salesFairs;
    }
    
}