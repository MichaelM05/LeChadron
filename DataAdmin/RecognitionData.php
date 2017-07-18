<?php

include_once '../Data/Data.php';
include_once '../Domain/Recognition.php';

class RecognitionData extends Data {

    public function insertTBRecognition($recognition) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbrecognition) AS idtbrecognition  FROM tbrecognition";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbrecognition VALUES (" . $nextId . ",'" .
                $recognition->getNameRecognition() . "','" .
                $recognition->getDescriptionRecognition() . "','" .
                $recognition->getImageRecognition() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBRecognition($recognition) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbrecognition SET " . 
                "namerecognition='" . $recognition->getNameRecognition() .
                "', descriptionrecognition='" . $recognition->getDescriptionRecognition() .
                "', imagerecognition='" . $recognition->getImageRecognition() .
                "' WHERE idtbrecognition=" . $recognition->getIdRecognition() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBRecognition($idRecognition) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbrecognition where idtbrecognition=" . $idRecognition . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBRecognition() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbrecognition;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $recognitions = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentRecognition = new Recognition($row['idtbrecognition'], $row['namerecognition'], 
                    $row['descriptionrecognition'], $row['imagerecognition']);
            array_push($recognitions, $currentRecognition);
        }
        return $recognitions;
    }
    
}