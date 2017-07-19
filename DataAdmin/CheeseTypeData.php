<?php

include_once '../Data/Data.php';
include_once '../Domain/CheeseType.php';

class CheeseTypeData extends Data {

    public function insertTBCheeseType($cheeseType) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbcheesetype) AS idtbcheesetype  FROM tbcheesetype";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbcheesetype VALUES (" . $nextId . ",'" .
                $cheeseType->getCheeseType() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBCheeseType($cheeseType) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbcheesetype SET " . 
                "cheesetype='" . $cheeseType->getCheeseType() .
                "' WHERE idtbcheesetype=" . $cheeseType->getIdCheeseType() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBCheeseType($idCheeseType) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbcheesetype where idtbcheesetype=" . $idCheeseType . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBCheeseType() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbcheesetype;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $cheeseTypes = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentCheeseType = new CheeseType($row['idtbcheesetype'], 
                    $row['cheesetype']);
            array_push($cheeseTypes, $currentCheeseType);
        }
        return $cheeseTypes;
    }
    
}

