<?php

include_once 'data.php';
include '../Domain/CreamType.php';

class CreamTypeData extends Data {

    public function insertTBCreamType($creamType) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbcreamtype) AS idtbcreamtype  FROM tbcreamtype";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbcreamtype VALUES (" . $nextId . ",'" .
                $creamType->getCreamType() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBCreamType($creamType) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbcreamtype SET " . 
                "creamtype='" . $creamType->getCreamType() .
                "' WHERE idtbcreamtype=" . $creamType->getIdCreamType() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBCreamType($idCreamType) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbcreamtype where idtbcreamtype=" . $idCreamType . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBCreamType() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbcreamtype;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $creamTypes = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentCreamType = new CreamType($row['idtbcreamtype'], 
                    $row['creamtype']);
            array_push($creamTypes, $currentCreamType);
        }
        return $creamTypes;
    }
    
}
