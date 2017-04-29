<?php

include_once 'data.php';
include '../Domain/Excursion.php';

class ExcursionData extends Data {

    public function insertTBExcursion($excursion) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbexcursion) AS idtbexcursion  FROM tbexcursion";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbexcursion VALUES (" . $nextId . ",'" .
                $excursion->getNameExcursion() . "','" .
                $excursion->getDescriptionExcursion() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBExcursion($excursion) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbexcursion SET " . 
                "nameexcursion='" . $excursion->getNameExcursion() .
                "', descriptionexcursion='" . $excursion->getDescriptionExcursion() .
                "' WHERE idtbexcursion=" . $excursion->getIdExcursion() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBExcursion($idExcursion) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbexcursion where idtbexcursion=" . $idExcursion . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBExcursion() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbexcursion;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $excursions = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentExcursion = new Excursion($row['idtbexcursion'], $row['nameexcursion'], 
                    $row['descriptionexcursion']);
            array_push($excursions, $currentExcursion);
        }
        return $excursions;
    }
    
}

