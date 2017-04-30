<?php

include_once 'Data.php';
include './Domain/ImageGallery.php';

class ImageGalleryData extends Data {

    public function insertTBImageGallery($imageGallery) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbimagegallery) AS idtbimagegallery  FROM "
                . "tbimagegallery;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbimagegallery VALUES (" . $nextId . ",'" .
                $imageGallery->getImageGallery() . "','" .
                $imageGallery->getImageGalleryDescription() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBImageGallery($imageGallery) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbimagegallery SET " . 
                "imagegallery='" . $imageGallery->getImageGallery() .
                "', imagegallerydescription='" . $imageGallery->getImageGalleryDescription() .
                "' WHERE idtbimagegallery=" . $imageGallery->getIdImageGallery() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBImageGallery($idImageGallery) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbimagegallery where idtbimagegallery=" . 
                $idImageGallery . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBImageGallery() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbimagegallery;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $imageGallerys = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImageGallery = new ImageGallery($row['idtbimagegallery'], 
                    $row['imagegallery'], 
                    $row['imagegallerydescription']);
            array_push($imageGallerys, $currentImageGallery);
        }
        return $imageGallerys;
    }
    
}