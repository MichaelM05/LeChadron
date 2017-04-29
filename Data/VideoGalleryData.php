<?php

include_once 'data.php';
include '../Domain/VideoGallery.php';

class VideoGalleryData extends Data {

    public function insertTBVideoGallery($videoGallery) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbvideogallery) AS idtbvideogallery  FROM "
                . "tbvideogallery;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbvideogallery VALUES (" . $nextId . ",'" .
                $videoGallery->getVideoGallery() . "','" .
                $videoGallery->getVideoDescription() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBVideoGallery($videoGallery) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbvideogallery SET " . 
                "videogallery='" . $videoGallery->getVideoGallery() .
                "', videodescription='" . $videoGallery->getVideoDescription() .
                "' WHERE idtbvideogallery=" . $videoGallery->getIdVideoGallery() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBVideoGallery($idVideoGallery) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbvideogallery where idtbvideogallery=" . 
                $idVideoGallery . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBVideoGallery() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbvideogallery;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $videoGallerys = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentVideoGallery = new VideoGallery($row['idtbvideogallery'], 
                    $row['videogallery'], 
                    $row['videodescription']);
            array_push($videoGallerys, $currentVideoGallery);
        }
        return $videoGallerys;
    }
    
}