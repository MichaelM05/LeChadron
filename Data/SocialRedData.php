<?php 

include_once 'data.php';
include '../Domain/SocialRed.php';

class SocialRedData extends Data {

    public function insertTBSocialRed($socialRed) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbsocialred) AS idtbsocialred  FROM tbsocialred";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbsocialred VALUES (" . $nextId . ",'" .
                $socialRed->getSocialRed() . "','" .
                $socialRed->getNameSocialRed() . "','" .
                $socialRed->getUrlSocialRed() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBSocialRed($socialRed) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbsocialred SET " . 
                "socialred='" . $socialRed->getSocialRed() .
                "', namesocialred='" . $socialRed->getNameSocialRed() .
                "', urlsocialred='" . $socialRed->getUrlSocialRed() .
                "' WHERE idtbsocialred=" . $socialRed->getIdSocialRed() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBSocialRed($idSocialRed) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbsocialred where idtbsocialred=" . $idSocialRed . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBSocialRed() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbsocialred;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $socialReds = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentSocialRed = new SocialRed($row['idtbsocialred'], $row['nameSocialRed'], 
                    $row['namesocialred'], $row['urlsocialred']);
            array_push($socialReds, $currentSocialRed);
        }
        return $socialReds;
    }
    
}