<?php

include_once 'data.php';
include '../Domain/ImageExcursion.php';

class ImageExcursionData extends Data {

    public function insertTBImageExcursion($imageExcursion) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbimageexcursion) AS idtbimageexcursion  FROM "
                . "tbimageexcursion;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbimageexcursion VALUES (" . $nextId . ",'" .
                $imageExcursion->getImageExcursion() . "'," .
                $imageExcursion->getExcursion() . ");";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBImageExcursion($imageExcursion) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbimageexcursion SET " . 
                "imageexcursion='" . $imageExcursion->getImageExcursion() .
                "', excursion=" . $imageExcursion->getExcursion() .
                " WHERE idtbimageexcursion=" . $imageExcursion->getIdImageExcursion() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBImageExcursion($idImageExcursion) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbimageexcursion where idtbimageexcursion=" . 
                $idImageExcursion . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBImageExcursion() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbimageexcursion;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $imageExcursions = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImageExcursion = new ImageExcursion($row['idtbimageexcursion'], 
                    $row['imageexcursion'], 
                    $row['excursion']);
            array_push($imageExcursions, $currentImageExcursion);
        }
        return $imageExcursions;
    }
    
}